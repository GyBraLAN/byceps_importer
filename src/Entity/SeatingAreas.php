<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeatingAreas
 *
 * @ORM\Table(name="seating_areas", uniqueConstraints={@ORM\UniqueConstraint(name="seating_areas_party_id_slug_key", columns={"party_id", "slug"}), @ORM\UniqueConstraint(name="seating_areas_party_id_title_key", columns={"party_id", "title"})}, indexes={@ORM\Index(name="ix_seating_areas_party_id", columns={"party_id"})})
 * @ORM\Entity
 */
class SeatingAreas
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seating_areas_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="text", nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_filename", type="text", nullable=true)
     */
    private $imageFilename;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_width", type="integer", nullable=true)
     */
    private $imageWidth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_height", type="integer", nullable=true)
     */
    private $imageHeight;

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
     * @return string
     */
    public final function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public final function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public final function getTitle()
    {
        return $this->title;
    }

    /**
     * @return Ambigous <string, NULL>
     */
    public final function getImageFilename()
    {
        return $this->imageFilename;
    }

    /**
     * @return Ambigous <number, NULL>
     */
    public final function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * @return Ambigous <number, NULL>
     */
    public final function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * @return Parties
     */
    public final function getParty()
    {
        return $this->party;
    }

    /**
     * @param string $slug
     */
    public final function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @param string $title
     */
    public final function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param Ambigous <string, NULL> $imageFilename
     */
    public final function setImageFilename($imageFilename)
    {
        $this->imageFilename = $imageFilename;
    }

    /**
     * @param Ambigous <number, NULL> $imageWidth
     */
    public final function setImageWidth($imageWidth)
    {
        $this->imageWidth = $imageWidth;
    }

    /**
     * @param Ambigous <number, NULL> $imageHeight
     */
    public final function setImageHeight($imageHeight)
    {
        $this->imageHeight = $imageHeight;
    }

    /**
     * @param Parties $party
     */
    public final function setParty($party)
    {
        $this->party = $party;
    }



}
