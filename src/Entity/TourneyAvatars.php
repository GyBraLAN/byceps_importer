<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TourneyAvatars
 *
 * @ORM\Table(name="tourney_avatars", indexes={@ORM\Index(name="ix_tourney_avatars_party_id", columns={"party_id"}), @ORM\Index(name="IDX_26DFEBBB61220EA6", columns={"creator_id"})})
 * @ORM\Entity
 */
class TourneyAvatars
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tourney_avatars_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Parties
     *
     * @ORM\ManyToOne(targetEntity="Parties")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="party_id", referencedColumnName="id")
     * })
     */
    private $party;

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
