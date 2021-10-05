<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEvents
 *
 * @ORM\Table(name="user_events", indexes={@ORM\Index(name="ix_user_events_user_id", columns={"user_id"}), @ORM\Index(name="ix_user_events_event_type", columns={"event_type"})})
 * @ORM\Entity
 */
class UserEvents
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="user_events_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
