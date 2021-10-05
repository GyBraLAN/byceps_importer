<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopArticleNumberSequences
 *
 * @ORM\Table(name="shop_article_number_sequences", uniqueConstraints={@ORM\UniqueConstraint(name="shop_article_number_sequences_prefix_key", columns={"prefix"})}, indexes={@ORM\Index(name="ix_shop_article_number_sequences_shop_id", columns={"shop_id"})})
 * @ORM\Entity
 */
class ShopArticleNumberSequences
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_article_number_sequences_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="text", nullable=false)
     */
    private $prefix;

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer", nullable=false)
     */
    private $value;

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
