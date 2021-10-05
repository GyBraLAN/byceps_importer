<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAvatars
 *
 * @ORM\Table(name="user_avatars", indexes={@ORM\Index(name="IDX_E8C49B2A61220EA6", columns={"creator_id"})})
 * @ORM\Entity
 */
class UserAvatars
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="user_avatars_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="image_type", type="text", nullable=false)
     */
    private $imageType;

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
