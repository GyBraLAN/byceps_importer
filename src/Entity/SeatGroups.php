<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeatGroups
 *
 * @ORM\Table(name="seat_groups", uniqueConstraints={@ORM\UniqueConstraint(name="seat_groups_party_id_title_key", columns={"party_id", "title"})}, indexes={@ORM\Index(name="ix_seat_groups_party_id", columns={"party_id"}), @ORM\Index(name="IDX_CCB9412A7ED69B9D", columns={"ticket_category_id"})})
 * @ORM\Entity
 */
class SeatGroups
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seat_groups_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="seat_quantity", type="integer", nullable=false)
     */
    private $seatQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
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
     * @var \TicketCategories
     *
     * @ORM\ManyToOne(targetEntity="TicketCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_category_id", referencedColumnName="id")
     * })
     */
    private $ticketCategory;


}
