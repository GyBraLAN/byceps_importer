<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seats
 *
 * @ORM\Table(name="seats", indexes={@ORM\Index(name="ix_seats_area_id", columns={"area_id"}), @ORM\Index(name="ix_seats_category_id", columns={"category_id"})})
 * @ORM\Entity
 */
class Seats
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * 
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="coord_x", type="integer", nullable=false)
     */
    private $coordX;

    /**
     * @var int
     *
     * @ORM\Column(name="coord_y", type="integer", nullable=false)
     */
    private $coordY;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="text", nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="text", nullable=true)
     */
    private $type;

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
     * @return string
     */
    public final function getId()
    {
        return $this->id;
    }

    /**
     * @return number
     */
    public final function getCoordX()
    {
        return $this->coordX;
    }

    /**
     * @return number
     */
    public final function getCoordY()
    {
        return $this->coordY;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public final function getLabel()
    {
        return $this->label;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public final function getType()
    {
        return $this->type;
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
     * @param number $coordX
     */
    public final function setCoordX($coordX)
    {
        $this->coordX = $coordX;
    }

    /**
     * @param number $coordY
     */
    public final function setCoordY($coordY)
    {
        $this->coordY = $coordY;
    }

    /**
     * @param Ambigous <string, NULL> $label
     */
    public final function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @param Ambigous <string, NULL> $type
     */
    public final function setType($type)
    {
        $this->type = $type;
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
