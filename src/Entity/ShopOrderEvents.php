<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopOrderEvents
 *
 * @ORM\Table(name="shop_order_events", indexes={@ORM\Index(name="ix_shop_order_events_event_type", columns={"event_type"}), @ORM\Index(name="ix_shop_order_events_order_id", columns={"order_id"})})
 * @ORM\Entity
 */
class ShopOrderEvents
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_order_events_id_seq", allocationSize=1, initialValue=1)
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
     * @var \ShopOrders
     *
     * @ORM\ManyToOne(targetEntity="ShopOrders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;


}
