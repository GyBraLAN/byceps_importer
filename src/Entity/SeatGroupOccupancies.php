<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeatGroupOccupancies
 *
 * @ORM\Table(name="seat_group_occupancies", uniqueConstraints={@ORM\UniqueConstraint(name="ix_seat_group_occupancies_seat_group_id", columns={"seat_group_id"}), @ORM\UniqueConstraint(name="ix_seat_group_occupancies_ticket_bundle_id", columns={"ticket_bundle_id"})})
 * @ORM\Entity
 */
class SeatGroupOccupancies
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seat_group_occupancies_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \SeatGroups
     *
     * @ORM\ManyToOne(targetEntity="SeatGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seat_group_id", referencedColumnName="id")
     * })
     */
    private $seatGroup;

    /**
     * @var \TicketBundles
     *
     * @ORM\ManyToOne(targetEntity="TicketBundles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_bundle_id", referencedColumnName="id")
     * })
     */
    private $ticketBundle;


}
