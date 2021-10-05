<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sites
 *
 * @ORM\Table(name="sites", uniqueConstraints={@ORM\UniqueConstraint(name="sites_title_key", columns={"title"}), @ORM\UniqueConstraint(name="sites_server_name_key", columns={"server_name"})}, indexes={@ORM\Index(name="ix_sites_party_id", columns={"party_id"}), @ORM\Index(name="ix_sites_brand_id", columns={"brand_id"}), @ORM\Index(name="ix_sites_storefront_id", columns={"storefront_id"}), @ORM\Index(name="ix_sites_board_id", columns={"board_id"})})
 * @ORM\Entity
 */
class Sites
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sites_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="server_name", type="text", nullable=false)
     */
    private $serverName;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="user_account_creation_enabled", type="boolean", nullable=false)
     */
    private $userAccountCreationEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="login_enabled", type="boolean", nullable=false)
     */
    private $loginEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="archived", type="boolean", nullable=false)
     */
    private $archived;

    /**
     * @var \Brands
     *
     * @ORM\ManyToOne(targetEntity="Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;

    /**
     * @var \Parties
     *
     * @ORM\ManyToOne(targetEntity="Parties")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="party_id", referencedColumnName="id")
     * })
     */
    private $party;

    /**
     * @var \Boards
     *
     * @ORM\ManyToOne(targetEntity="Boards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="board_id", referencedColumnName="id")
     * })
     */
    private $board;

    /**
     * @var \ShopStorefronts
     *
     * @ORM\ManyToOne(targetEntity="ShopStorefronts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="storefront_id", referencedColumnName="id")
     * })
     */
    private $storefront;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="NewsChannels", inversedBy="site")
     * @ORM\JoinTable(name="site_news_channels",
     *   joinColumns={
     *     @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="news_channel_id", referencedColumnName="id")
     *   }
     * )
     */
    private $newsChannel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->newsChannel = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
