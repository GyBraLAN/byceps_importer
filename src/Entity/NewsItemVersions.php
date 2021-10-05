<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsItemVersions
 *
 * @ORM\Table(name="news_item_versions", indexes={@ORM\Index(name="ix_news_item_versions_item_id", columns={"item_id"}), @ORM\Index(name="IDX_2032E45F61220EA6", columns={"creator_id"})})
 * @ORM\Entity
 */
class NewsItemVersions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="news_item_versions_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_url_path", type="text", nullable=true)
     */
    private $imageUrlPath;

    /**
     * @var \NewsItems
     *
     * @ORM\ManyToOne(targetEntity="NewsItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creator_id", referencedColumnName="id")
     * })
     */
    private $creator;


}
