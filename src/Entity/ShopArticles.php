<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopArticles
 *
 * @ORM\Table(name="shop_articles", uniqueConstraints={@ORM\UniqueConstraint(name="shop_articles_item_number_key", columns={"item_number"}), @ORM\UniqueConstraint(name="shop_articles_shop_id_description_key", columns={"shop_id", "description"})}, indexes={@ORM\Index(name="ix_shop_articles_shop_id", columns={"shop_id"})})
 * @ORM\Entity
 */
class ShopArticles
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_articles_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="item_number", type="text", nullable=false)
     */
    private $itemNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate", type="decimal", precision=3, scale=3, nullable=false)
     */
    private $taxRate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_from", type="datetime", nullable=true)
     */
    private $availableFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_until", type="datetime", nullable=true)
     */
    private $availableUntil;

    /**
     * @var int
     *
     * @ORM\Column(name="total_quantity", type="integer", nullable=false)
     */
    private $totalQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="max_quantity_per_order", type="integer", nullable=false)
     */
    private $maxQuantityPerOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="not_directly_orderable", type="boolean", nullable=false)
     */
    private $notDirectlyOrderable;

    /**
     * @var bool
     *
     * @ORM\Column(name="separate_order_required", type="boolean", nullable=false)
     */
    private $separateOrderRequired;

    /**
     * @var bool
     *
     * @ORM\Column(name="processing_required", type="boolean", nullable=false)
     */
    private $processingRequired;

    /**
     * @var \Shops
     *
     * @ORM\ManyToOne(targetEntity="Shops")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     * })
     */
    private $shop;


}
