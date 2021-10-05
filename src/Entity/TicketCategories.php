<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketCategories
 *
 * @ORM\Table(name="ticket_categories", uniqueConstraints={@ORM\UniqueConstraint(name="ticket_categories_party_id_title_key", columns={"party_id", "title"})}, indexes={@ORM\Index(name="ix_ticket_categories_party_id", columns={"party_id"})})
 * @ORM\Entity
 */
class TicketCategories
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ticket_categories_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @return Parties
     */
    public final function getParty()
    {
        return $this->party;
    }

    /**
     * @param string $title
     */
    public final function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param Parties $party
     */
    public final function setParty($party)
    {
        $this->party = $party;
    }



}
