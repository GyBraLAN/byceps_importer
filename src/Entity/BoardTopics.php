<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardTopics
 *
 * @ORM\Table(name="board_topics", indexes={@ORM\Index(name="ix_board_topics_category_id", columns={"category_id"}), @ORM\Index(name="IDX_3DE8029E61220EA6", columns={"creator_id"}), @ORM\Index(name="IDX_3DE8029EE562D849", columns={"last_updated_by_id"}), @ORM\Index(name="IDX_3DE8029E750EF4DA", columns={"hidden_by_id"}), @ORM\Index(name="IDX_3DE8029E7A88E00", columns={"locked_by_id"}), @ORM\Index(name="IDX_3DE8029E59662AC1", columns={"pinned_by_id"})})
 * @ORM\Entity
 */
class BoardTopics
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="board_topics_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="posting_count", type="integer", nullable=false)
     */
    private $postingCount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_updated_at", type="datetime", nullable=true)
     */
    private $lastUpdatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hidden_at", type="datetime", nullable=true)
     */
    private $hiddenAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="locked_at", type="datetime", nullable=true)
     */
    private $lockedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="pinned", type="boolean", nullable=false)
     */
    private $pinned;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pinned_at", type="datetime", nullable=true)
     */
    private $pinnedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="posting_limited_to_moderators", type="boolean", nullable=false)
     */
    private $postingLimitedToModerators;

    /**
     * @var bool
     *
     * @ORM\Column(name="muted", type="boolean", nullable=false)
     */
    private $muted;

    /**
     * @var \BoardCategories
     *
     * @ORM\ManyToOne(targetEntity="BoardCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creator_id", referencedColumnName="id")
     * })
     */
    private $creator;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="last_updated_by_id", referencedColumnName="id")
     * })
     */
    private $lastUpdatedBy;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hidden_by_id", referencedColumnName="id")
     * })
     */
    private $hiddenBy;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locked_by_id", referencedColumnName="id")
     * })
     */
    private $lockedBy;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pinned_by_id", referencedColumnName="id")
     * })
     */
    private $pinnedBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Users", mappedBy="topic")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
