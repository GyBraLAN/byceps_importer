<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsChannels
 *
 * @ORM\Table(name="news_channels", indexes={@ORM\Index(name="ix_news_channels_brand_id", columns={"brand_id"})})
 * @ORM\Entity
 */
class NewsChannels
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="news_channels_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url_prefix", type="text", nullable=false)
     */
    private $urlPrefix;

    /**
     * @var \Brands
     *
     * @ORM\ManyToOne(targetEntity="Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Sites", mappedBy="newsChannel")
     */
    private $site;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->site = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
