<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopOrderLineItems
 *
 * @ORM\Table(name="shop_order_line_items", indexes={@ORM\Index(name="ix_shop_order_line_items_order_number", columns={"order_number"}), @ORM\Index(name="ix_shop_order_line_items_article_number", columns={"article_number"})})
 * @ORM\Entity
 */
class ShopOrderLineItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_order_line_items_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="article_type", type="text", nullable=false)
     */
    private $articleType;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate", type="decimal", precision=3, scale=3, nullable=false)
     */
    private $taxRate;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="line_amount", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $lineAmount;

    /**
     * @var bool
     *
     * @ORM\Column(name="processing_required", type="boolean", nullable=false)
     */
    private $processingRequired;

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
     * @var \ShopArticles
     *
     * @ORM\ManyToOne(targetEntity="ShopArticles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_number", referencedColumnName="item_number")
     * })
     */
    private $articleNumber;


}
