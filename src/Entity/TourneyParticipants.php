<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TourneyParticipants
 *
 * @ORM\Table(name="tourney_participants", indexes={@ORM\Index(name="ix_tourney_participants_tourney_id", columns={"tourney_id"}), @ORM\Index(name="IDX_33F614FDB03A8386", columns={"created_by_id"})})
 * @ORM\Entity
 */
class TourneyParticipants
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tourney_participants_id_seq", allocationSize=1, initialValue=1)
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
     * @var int|null
     *
     * @ORM\Column(name="max_size", type="integer", nullable=true)
     */
    private $maxSize;

    /**
     * @var \Tourneys
     *
     * @ORM\ManyToOne(targetEntity="Tourneys")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tourney_id", referencedColumnName="id")
     * })
     */
    private $tourney;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by_id", referencedColumnName="id")
     * })
     */
    private $createdBy;


}
