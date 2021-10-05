<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopAttachedArticles
 *
 * @ORM\Table(name="shop_attached_articles", uniqueConstraints={@ORM\UniqueConstraint(name="shop_attached_articles_article_number_attached_to_article_n_key", columns={"article_number", "attached_to_article_number"})}, indexes={@ORM\Index(name="ix_shop_attached_articles_attached_to_article_number", columns={"attached_to_article_number"}), @ORM\Index(name="ix_shop_attached_articles_article_number", columns={"article_number"})})
 * @ORM\Entity
 */
class ShopAttachedArticles
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_attached_articles_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \ShopArticles
     *
     * @ORM\ManyToOne(targetEntity="ShopArticles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_number", referencedColumnName="item_number")
     * })
     */
    private $articleNumber;

    /**
     * @var \ShopArticles
     *
     * @ORM\ManyToOne(targetEntity="ShopArticles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attached_to_article_number", referencedColumnName="item_number")
     * })
     */
    private $attachedToArticleNumber;


}
