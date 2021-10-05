<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parties
 *
 * @ORM\Table(name="parties", uniqueConstraints={@ORM\UniqueConstraint(name="parties_title_key", columns={"title"})}, indexes={@ORM\Index(name="ix_parties_brand_id", columns={"brand_id"})})
 * @ORM\Entity
 */
class Parties
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="parties_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

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
     * @var int|null
     *
     * @ORM\Column(name="max_ticket_quantity", type="integer", nullable=true)
     */
    private $maxTicketQuantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="ticket_management_enabled", type="boolean", nullable=false)
     */
    private $ticketManagementEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="seat_management_enabled", type="boolean", nullable=false)
     */
    private $seatManagementEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="canceled", type="boolean", nullable=false)
     */
    private $canceled;

    /**
     * @var bool
     *
     * @ORM\Column(name="archived", type="boolean", nullable=false)
     */
    private $archived;

    /**
     * @var \Brands
     *
     * @ORM\ManyToOne(targetEntity="Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Users", mappedBy="party")
     */
    private $user;

    /**
     * @return string
     */
    public final function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public final function getTitle()
    {
        return $this->title;
    }

    /**
     * @return DateTime
     */
    public final function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * @return DateTime
     */
    public final function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * @return Ambigous <number, NULL>
     */
    public final function getMaxTicketQuantity()
    {
        return $this->maxTicketQuantity;
    }

    /**
     * @return boolean
     */
    public final function isTicketManagementEnabled()
    {
        return $this->ticketManagementEnabled;
    }

    /**
     * @return boolean
     */
    public final function isSeatManagementEnabled()
    {
        return $this->seatManagementEnabled;
    }

    /**
     * @return boolean
     */
    public final function isCanceled()
    {
        return $this->canceled;
    }

    /**
     * @return boolean
     */
    public final function isArchived()
    {
        return $this->archived;
    }

    /**
     * @return Brands
     */
    public final function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public final function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $title
     */
    public final function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param DateTime $startsAt
     */
    public final function setStartsAt($startsAt)
    {
        $this->startsAt = $startsAt;
    }

    /**
     * @param DateTime $endsAt
     */
    public final function setEndsAt($endsAt)
    {
        $this->endsAt = $endsAt;
    }

    /**
     * @param Ambigous <number, NULL> $maxTicketQuantity
     */
    public final function setMaxTicketQuantity($maxTicketQuantity)
    {
        $this->maxTicketQuantity = $maxTicketQuantity;
    }

    /**
     * @param boolean $ticketManagementEnabled
     */
    public final function setTicketManagementEnabled($ticketManagementEnabled)
    {
        $this->ticketManagementEnabled = $ticketManagementEnabled;
    }

    /**
     * @param boolean $seatManagementEnabled
     */
    public final function setSeatManagementEnabled($seatManagementEnabled)
    {
        $this->seatManagementEnabled = $seatManagementEnabled;
    }

    /**
     * @param boolean $canceled
     */
    public final function setCanceled($canceled)
    {
        $this->canceled = $canceled;
    }

    /**
     * @param boolean $archived
     */
    public final function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @param Brands $brand
     */
    public final function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $user
     */
    public final function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
