<?php
namespace App\Helper;

use Doctrine\ORM\Mapping as ORM;

class ImportClass {
    
    private $cssClass;
    
    /**
     * @var \Parties
     *
     * @ORM\ManyToOne(targetEntity="Parties")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="party_id", referencedColumnName="id")
     * })
     */
    private $party;
    
    /**
     * @var \SeatingAreas
     *
     * @ORM\ManyToOne(targetEntity="SeatingAreas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     * })
     */
    private $area;
    
    /**
     * @var \TicketCategories
     *
     * @ORM\ManyToOne(targetEntity="TicketCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;
    /**
     * @return mixed
     */
    public final function getCssClass() : String
    {
        return $this->cssClass;
    }

    /**
     * @param mixed $cssClass
     */
    public final function setCssClass(String $cssClass)
    {
        $this->cssClass = $cssClass;
    }

    /**
     * @return Parties
     */
    public final function getParty()
    {
        return $this->party;
    }

    /**
     * @return SeatingAreas
     */
    public final function getArea()
    {
        return $this->area;
    }

    /**
     * @return TicketCategories
     */
    public final function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Parties $party
     */
    public final function setParty($party)
    {
        $this->party = $party;
    }

    /**
     * @param SeatingAreas $area
     */
    public final function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @param TicketCategories $category
     */
    public final function setCategory($category)
    {
        $this->category = $category;
    }


}