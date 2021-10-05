<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardCategories
 *
 * @ORM\Table(name="board_categories", uniqueConstraints={@ORM\UniqueConstraint(name="board_categories_board_id_slug_key", columns={"board_id", "slug"}), @ORM\UniqueConstraint(name="board_categories_board_id_title_key", columns={"board_id", "title"})}, indexes={@ORM\Index(name="ix_board_categories_board_id", columns={"board_id"}), @ORM\Index(name="IDX_96FD92D434ACF89B", columns={"last_posting_updated_by_id"})})
 * @ORM\Entity
 */
class BoardCategories
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="board_categories_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="text", nullable=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="topic_count", type="integer", nullable=false)
     */
    private $topicCount;

    /**
     * @var int
     *
     * @ORM\Column(name="posting_count", type="integer", nullable=false)
     */
    private $postingCount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_posting_updated_at", type="datetime", nullable=true)
     */
    private $lastPostingUpdatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="last_posting_updated_by_id", referencedColumnName="id")
     * })
     */
    private $lastPostingUpdatedBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Users", mappedBy="category")
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
