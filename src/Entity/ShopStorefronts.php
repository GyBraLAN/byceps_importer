<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopStorefronts
 *
 * @ORM\Table(name="shop_storefronts", indexes={@ORM\Index(name="ix_shop_storefronts_shop_id", columns={"shop_id"}), @ORM\Index(name="IDX_6B5F2FD5CC3C66FC", columns={"catalog_id"}), @ORM\Index(name="IDX_6B5F2FD540BCA245", columns={"order_number_sequence_id"})})
 * @ORM\Entity
 */
class ShopStorefronts
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_storefronts_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="closed", type="boolean", nullable=false)
     */
    private $closed;

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
     * @var \ShopCatalogs
     *
     * @ORM\ManyToOne(targetEntity="ShopCatalogs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="catalog_id", referencedColumnName="id")
     * })
     */
    private $catalog;

    /**
     * @var \ShopOrderNumberSequences
     *
     * @ORM\ManyToOne(targetEntity="ShopOrderNumberSequences")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_number_sequence_id", referencedColumnName="id")
     * })
     */
    private $orderNumberSequence;


}
