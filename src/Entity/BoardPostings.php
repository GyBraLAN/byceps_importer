<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardPostings
 *
 * @ORM\Table(name="board_postings", indexes={@ORM\Index(name="ix_board_postings_topic_id", columns={"topic_id"}), @ORM\Index(name="IDX_4248CB6961220EA6", columns={"creator_id"}), @ORM\Index(name="IDX_4248CB69D48D54E8", columns={"last_edited_by_id"}), @ORM\Index(name="IDX_4248CB69750EF4DA", columns={"hidden_by_id"})})
 * @ORM\Entity
 */
class BoardPostings
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="board_postings_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_edited_at", type="datetime", nullable=true)
     */
    private $lastEditedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="edit_count", type="integer", nullable=false)
     */
    private $editCount;

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
     * @var \BoardTopics
     *
     * @ORM\ManyToOne(targetEntity="BoardTopics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     * })
     */
    private $topic;

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
     *   @ORM\JoinColumn(name="last_edited_by_id", referencedColumnName="id")
     * })
     */
    private $lastEditedBy;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hidden_by_id", referencedColumnName="id")
     * })
     */
    private $hiddenBy;


}
