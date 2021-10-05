<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopOrderActions
 *
 * @ORM\Table(name="shop_order_actions", indexes={@ORM\Index(name="ix_shop_order_actions_payment_state", columns={"payment_state"}), @ORM\Index(name="ix_shop_order_actions_article_number", columns={"article_number"})})
 * @ORM\Entity
 */
class ShopOrderActions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_order_actions_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_state", type="text", nullable=false)
     */
    private $paymentState;

    /**
     * @var string
     *
     * @ORM\Column(name="procedure", type="text", nullable=false)
     */
    private $procedure;

    /**
     * @var json
     *
     * @ORM\Column(name="parameters", type="json", nullable=false)
     */
    private $parameters;

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
