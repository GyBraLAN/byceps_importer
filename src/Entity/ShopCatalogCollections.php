<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopCatalogCollections
 *
 * @ORM\Table(name="shop_catalog_collections", uniqueConstraints={@ORM\UniqueConstraint(name="shop_catalog_collections_catalog_id_title_key", columns={"catalog_id", "title"})}, indexes={@ORM\Index(name="ix_shop_catalog_collections_catalog_id", columns={"catalog_id"})})
 * @ORM\Entity
 */
class ShopCatalogCollections
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_catalog_collections_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var \ShopCatalogs
     *
     * @ORM\ManyToOne(targetEntity="ShopCatalogs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="catalog_id", referencedColumnName="id")
     * })
     */
    private $catalog;


}
