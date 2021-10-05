<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopCatalogs
 *
 * @ORM\Table(name="shop_catalogs", uniqueConstraints={@ORM\UniqueConstraint(name="shop_catalogs_title_key", columns={"title"})})
 * @ORM\Entity
 */
class ShopCatalogs
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shop_catalogs_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;


}
