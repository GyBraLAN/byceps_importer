<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopCatalogArticles
 *
 * @ORM\Table(name="shop_catalog_articles", uniqueConstraints={@ORM\UniqueConstraint(name="shop_catalog_articles_collection_id_article_number_key", columns={"collection_id", "article_number"})}, indexes={@ORM\Index(name="ix_shop_catalog_articles_collection_id", columns={"collection_id"}), @ORM\Index(name="ix_shop_catalog_articles_article_number", columns={"article_number"})})
 * @ORM\Entity
 */
class ShopCatalogArticles
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_catalog_articles_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var \ShopCatalogCollections
     *
     * @ORM\ManyToOne(targetEntity="ShopCatalogCollections")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="collection_id", referencedColumnName="id")
     * })
     */
    private $collection;

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
