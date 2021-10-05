<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserBadges
 *
 * @ORM\Table(name="user_badges", uniqueConstraints={@ORM\UniqueConstraint(name="user_badges_label_key", columns={"label"}), @ORM\UniqueConstraint(name="ix_user_badges_slug", columns={"slug"})}, indexes={@ORM\Index(name="IDX_1DA448A744F5D008", columns={"brand_id"})})
 * @ORM\Entity
 */
class UserBadges
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="user_badges_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="label", type="text", nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image_filename", type="text", nullable=false)
     */
    private $imageFilename;

    /**
     * @var bool
     *
     * @ORM\Column(name="featured", type="boolean", nullable=false)
     */
    private $featured;

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
