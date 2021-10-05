<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserBadgeAwardings
 *
 * @ORM\Table(name="user_badge_awardings", indexes={@ORM\Index(name="IDX_C8BA9388F7A2C2FC", columns={"badge_id"}), @ORM\Index(name="IDX_C8BA9388A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class UserBadgeAwardings
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="user_badge_awardings_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="awarded_at", type="datetime", nullable=false)
     */
    private $awardedAt;

    /**
     * @var \UserBadges
     *
     * @ORM\ManyToOne(targetEntity="UserBadges")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="badge_id", referencedColumnName="id")
     * })
     */
    private $badge;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
