<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boards
 *
 * @ORM\Table(name="boards", indexes={@ORM\Index(name="ix_boards_brand_id", columns={"brand_id"})})
 * @ORM\Entity
 */
class Boards
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="boards_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="access_restricted", type="boolean", nullable=false)
     */
    private $accessRestricted;

    /**
     * @var \Brands
     *
     * @ORM\ManyToOne(targetEntity="Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;


}
