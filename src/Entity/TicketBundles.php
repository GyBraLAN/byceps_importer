<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketBundles
 *
 * @ORM\Table(name="ticket_bundles", indexes={@ORM\Index(name="ix_ticket_bundles_ticket_category_id", columns={"ticket_category_id"}), @ORM\Index(name="ix_ticket_bundles_party_id", columns={"party_id"}), @ORM\Index(name="ix_ticket_bundles_users_managed_by_id", columns={"users_managed_by_id"}), @ORM\Index(name="ix_ticket_bundles_owned_by_id", columns={"owned_by_id"}), @ORM\Index(name="ix_ticket_bundles_seats_managed_by_id", columns={"seats_managed_by_id"})})
 * @ORM\Entity
 */
class TicketBundles
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ticket_bundles_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var int
     *
     * @ORM\Column(name="ticket_quantity", type="integer", nullable=false)
     */
    private $ticketQuantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="text", nullable=true)
     */
    private $label;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seats_managed_by_id", referencedColumnName="id")
     * })
     */
    private $seatsManagedBy;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="users_managed_by_id", referencedColumnName="id")
     * })
     */
    private $usersManagedBy;


}
