<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsItems
 *
 * @ORM\Table(name="news_items", uniqueConstraints={@ORM\UniqueConstraint(name="ix_news_items_slug", columns={"slug"})}, indexes={@ORM\Index(name="ix_news_items_channel_id", columns={"channel_id"})})
 * @ORM\Entity
 */
class NewsItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="news_items_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="slug", type="text", nullable=false)
     */
    private $slug;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="published_at", type="datetime", nullable=true)
     */
    private $publishedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="featured_image_id", type="guid", nullable=true)
     */
    private $featuredImageId;

    /**
     * @var \NewsChannels
     *
     * @ORM\ManyToOne(targetEntity="NewsChannels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="channel_id", referencedColumnName="id")
     * })
     */
    private $channel;


}
