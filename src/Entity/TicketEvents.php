<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketEvents
 *
 * @ORM\Table(name="ticket_events", indexes={@ORM\Index(name="ix_ticket_events_ticket_id", columns={"ticket_id"}), @ORM\Index(name="ix_ticket_events_event_type", columns={"event_type"})})
 * @ORM\Entity
 */
class TicketEvents
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ticket_events_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="occurred_at", type="datetime", nullable=false)
     */
    private $occurredAt;

    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="text", nullable=false)
     */
    private $eventType;

    /**
     * @var json|null
     *
     * @ORM\Column(name="data", type="json", nullable=true)
     */
    private $data;

    /**
     * @var \Tickets
     *
     * @ORM\ManyToOne(targetEntity="Tickets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     * })
     */
    private $ticket;


}
