<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopOrders
 *
 * @ORM\Table(name="shop_orders", uniqueConstraints={@ORM\UniqueConstraint(name="shop_orders_order_number_key", columns={"order_number"})}, indexes={@ORM\Index(name="ix_shop_orders_payment_state", columns={"payment_state"}), @ORM\Index(name="ix_shop_orders_placed_by_id", columns={"placed_by_id"}), @ORM\Index(name="ix_shop_orders_shop_id", columns={"shop_id"}), @ORM\Index(name="IDX_608DDB6C2863AFFD", columns={"payment_state_updated_by_id"})})
 * @ORM\Entity
 */
class ShopOrders
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_orders_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="order_number", type="text", nullable=false)
     */
    private $orderNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="first_names", type="text", nullable=false)
     */
    private $firstNames;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="text", nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="text", nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="text", nullable=false)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="text", nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="text", nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="total_amount", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $totalAmount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="invoice_created_at", type="datetime", nullable=true)
     */
    private $invoiceCreatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_method", type="text", nullable=true)
     */
    private $paymentMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_state", type="text", nullable=false)
     */
    private $paymentState;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="payment_state_updated_at", type="datetime", nullable=true)
     */
    private $paymentStateUpdatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cancelation_reason", type="text", nullable=true)
     */
    private $cancelationReason;

    /**
     * @var bool
     *
     * @ORM\Column(name="processing_required", type="boolean", nullable=false)
     */
    private $processingRequired;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="processed_at", type="datetime", nullable=true)
     */
    private $processedAt;

    /**
     * @var \Shops
     *
     * @ORM\ManyToOne(targetEntity="Shops")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     * })
     */
    private $shop;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="placed_by_id", referencedColumnName="id")
     * })
     */
    private $placedBy;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_state_updated_by_id", referencedColumnName="id")
     * })
     */
    private $paymentStateUpdatedBy;


}
