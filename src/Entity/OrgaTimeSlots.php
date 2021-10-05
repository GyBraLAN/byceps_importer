<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrgaTimeSlots
 *
 * @ORM\Table(name="orga_time_slots", indexes={@ORM\Index(name="ix_orga_time_slots_party_id", columns={"party_id"}), @ORM\Index(name="ix_orga_time_slots_type", columns={"type"}), @ORM\Index(name="IDX_8FD99B2897F068A1", columns={"orga_id"})})
 * @ORM\Entity
 */
class OrgaTimeSlots
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="orga_time_slots_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starts_at", type="datetime", nullable=false)
     */
    private $startsAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ends_at", type="datetime", nullable=false)
     */
    private $endsAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

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
     *   @ORM\JoinColumn(name="orga_id", referencedColumnName="id")
     * })
     */
    private $orga;


}
