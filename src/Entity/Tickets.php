<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets", uniqueConstraints={@ORM\UniqueConstraint(name="ix_tickets_occupied_seat_id", columns={"occupied_seat_id"}), @ORM\UniqueConstraint(name="tickets_party_id_code_key", columns={"party_id", "code"})}, indexes={@ORM\Index(name="ix_tickets_used_by_id", columns={"used_by_id"}), @ORM\Index(name="ix_tickets_user_managed_by_id", columns={"user_managed_by_id"}), @ORM\Index(name="ix_tickets_order_number", columns={"order_number"}), @ORM\Index(name="ix_tickets_bundle_id", columns={"bundle_id"}), @ORM\Index(name="ix_tickets_party_id", columns={"party_id"}), @ORM\Index(name="ix_tickets_code", columns={"code"}), @ORM\Index(name="ix_tickets_seat_managed_by_id", columns={"seat_managed_by_id"}), @ORM\Index(name="ix_tickets_owned_by_id", columns={"owned_by_id"}), @ORM\Index(name="ix_tickets_category_id", columns={"category_id"})})
 * @ORM\Entity
 */
class Tickets
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tickets_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="code", type="text", nullable=false)
     */
    private $code;

    /**
     * @var bool
     *
     * @ORM\Column(name="revoked", type="boolean", nullable=false)
     */
    private $revoked;

    /**
     * @var bool
     *
     * @ORM\Column(name="user_checked_in", type="boolean", nullable=false)
     */
    private $userCheckedIn;

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
     * @var \TicketBundles
     *
     * @ORM\ManyToOne(targetEntity="TicketBundles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bundle_id", referencedColumnName="id")
     * })
     */
    private $bundle;

    /**
     * @var \TicketCategories
     *
     * @ORM\ManyToOne(targetEntity="TicketCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owned_by_id", referencedColumnName="id")
     * })
     */
    private $ownedBy;

    /**
     * @var \ShopOrders
     *
     * @ORM\ManyToOne(targetEntity="ShopOrders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_number", referencedColumnName="order_number")
     * })
     */
    private $orderNumber;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seat_managed_by_id", referencedColumnName="id")
     * })
     */
    private $seatManagedBy;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_managed_by_id", referencedColumnName="id")
     * })
     */
    private $userManagedBy;

    /**
     * @var \Seats
     *
     * @ORM\ManyToOne(targetEntity="Seats")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="occupied_seat_id", referencedColumnName="id")
     * })
     */
    private $occupiedSeat;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="used_by_id", referencedColumnName="id")
     * })
     */
    private $usedBy;


}
