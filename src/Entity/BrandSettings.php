<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrandSettings
 *
 * @ORM\Table(name="brand_settings", indexes={@ORM\Index(name="IDX_227533D444F5D008", columns={"brand_id"})})
 * @ORM\Entity
 */
class BrandSettings
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var \Brands
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;


}
