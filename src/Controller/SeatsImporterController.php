<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\SeatingAreas;
use App\Entity\Seats;
use App\Entity\TicketCategories;
use App\Helper\ImportClass;
use App\Form\Type\ImportType;
use Symfony\Component\HttpFoundation\Request;
use App\Helper\ConfigClass;
use App\Form\Type\ConfigType;

class SeatsImporterController extends AbstractController
{

    /**
     *
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->renderForm('index.html.twig');
    }

    /**
     *
     * @param ImportClass $importer
     * @return array
     */
    private function _getSvgVars(ImportClass $importer): Array
    {
        $svg_path = $_ENV['BYCEPSPATH'] . $_ENV["BYCEPSPARTYPATH"] . '/' . $importer->getParty()->getId() . $_ENV["BYCEPSSEATINGPATH"] . $_ENV["BYCEPSSEATINGAREASPATH"];
        $filename = $importer->getArea()->getImageFilename();
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $css_file_class = basename($filename, "." . $ext);
        $file = $svg_path . "/" . $filename;
        return [
            $file,
            $css_file_class
        ];
    }

    private function _getNodesFromDom(String $file, String $classname): \DOMNodeList
    {
        $dom = new \DOMDocument();
        if (! is_file($file))
            throw new \Exception("No svg found.");
        $dom->load($file);
        $finder = new \DOMXPath($dom);
        return $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
    }

    /**
     *
     * @Route("/seats/import", name="seats_import")
     */
    public function seatsImportStep1(Request $request): Response
    {
        $result_data = [];
        $importer = new ImportClass();
        $form = $this->createForm(ImportType::class, $importer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $importer = $form->getData();
            if (! ($importer instanceof ImportClass))
                throw new \Exception();
            list ($file, $css_file_class) = $this->_getSvgVars($importer);
            $entityManager = $this->getDoctrine()->getManager();
            foreach ($this->_getNodesFromDom($file, $importer->getCssClass()) as $seat) {
                $new_seat = new Seats();
                // $new_seat->generate_id();
                $new_seat->setArea($importer->getArea());
                $new_seat->setCategory($importer->getCategory());
                foreach ($seat->attributes as $k => $val) {
                    switch ($k) {
                        case 'id':
                            $new_seat->setLabel($val->value);
                            break;
                        case 'x':
                            $new_seat->setCoordX(intval($val->value));
                            break;
                        case 'y':
                            $new_seat->setCoordY(intval($val->value));
                            break;
                        case 'class':
                            $new_seat->setType($css_file_class . "_" . $val->value);
                            break;
                        // for further use
                        case 'width':
                        case 'height':
                        default:
                    }
                }
                $repo = $entityManager->getRepository(Seats::class);
                // check if there is allready a seat on this position
                if (! is_null($repo->findOneBy([
                    'coordX' => $new_seat->getCoordX(),
                    'coordY' => $new_seat->getCoordY(),
                    'area' => $new_seat->getArea()
                ])))
                    continue;
                // check if there is allready a seat with this label
                if (! is_null($repo->findOneBy([
                    'label' => $new_seat->getLabel(),
                    'area' => $new_seat->getArea()
                ])))
                    continue;

                $entityManager->persist($new_seat);
                $entityManager->flush();
                $result_data[] = $new_seat;
            }
        }

        return $this->renderForm('form.html.twig', [
            'form' => $form
        ]);
    }

    /**
     *
     * @Route("/seats/show", name="seats_show")
     */
    public function seatsShow(Request $request)
    {
        $table = "seats";

        return $this->renderForm('table.html.twig', [
            'table' => $table
        ]);
    }

    /**
     *
     * @Route("seats/get", name="seats_get")
     */
    public function getSeats(Request $request): JsonResponse
    {
        $data = [
            'data' => []
        ];
        $em = $this->getDoctrine()->getManager();
        // $seatingAreasRepo = $em->getRepository(SeatingAreas::class);
        // $categoryRepo = $em->getRepository(TicketCategories::class);
        foreach ($em->getRepository(Seats::class)->findAll() as $seat) {
            if (! ($seat instanceof Seats))
                continue;
            // $em->persist($seat);
            $em->initializeObject($seat);
            $area = $seat->getArea();
            $em->initializeObject($area);
            $category = $seat->getCategory();
            $em->initializeObject($category);
            $data['data'][] = [
                'id' => $seat->getId(),
                'area' => $area->getTitle(),
                'x' => $seat->getCoordX(),
                'y' => $seat->getCoordY(),
                'category' => $category->getTitle(),
                'label' => $seat->getLabel(),
                'type' => $seat->getType()
            ];
        }

        $response = new JsonResponse();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
