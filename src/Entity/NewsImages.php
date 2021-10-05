<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsImages
 *
 * @ORM\Table(name="news_images", uniqueConstraints={@ORM\UniqueConstraint(name="news_images_item_id_number_key", columns={"item_id", "number"})}, indexes={@ORM\Index(name="ix_news_images_item_id", columns={"item_id"}), @ORM\Index(name="IDX_6CB67D1E61220EA6", columns={"creator_id"})})
 * @ORM\Entity
 */
class NewsImages
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="news_images_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer", nullable=false)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="text", nullable=false)
     */
    private $filename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alt_text", type="text", nullable=true)
     */
    private $altText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caption", type="text", nullable=true)
     */
    private $caption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attribution", type="text", nullable=true)
     */
    private $attribution;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creator_id", referencedColumnName="id")
     * })
     */
    private $creator;

    /**
     * @var \NewsItems
     *
     * @ORM\ManyToOne(targetEntity="NewsItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;


}
