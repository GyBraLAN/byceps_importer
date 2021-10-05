<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteSettings
 *
 * @ORM\Table(name="site_settings", indexes={@ORM\Index(name="ix_site_settings_site_id", columns={"site_id"})})
 * @ORM\Entity
 */
class SiteSettings
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
     * @var \Sites
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Sites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     * })
     */
    private $site;


}
