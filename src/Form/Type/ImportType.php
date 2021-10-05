<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Seats;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Parties;
use App\Helper\ImportClass;
use App\Entity\SeatingAreas;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\TicketCategories;

class ImportType extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ImportClass::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('party', EntityType::class, ['label'=>"Party", 'class'=> Parties::class, 'choice_label' => 'title',])
        ->add('area', EntityType::class, ['label'=>"Bereich", 'class'=> SeatingAreas::class, 'choice_label' => 'title',])
        ->add('category', EntityType::class, ['label'=>"Default Ticketkategorie", 'class'=> TicketCategories::class, 'choice_label' => 'title',])
        ->add('css_class', TextType::class, ['label'=>"CSS-Klasse der Sitze", 'data' => 'seats'])
        ->add('save', SubmitType::class, ['label'=>"Weiter"]);
    }

//     public function buildView(){}
//    public function finishView(){}

}

?>