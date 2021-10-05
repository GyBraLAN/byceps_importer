<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TourneyMatchComments
 *
 * @ORM\Table(name="tourney_match_comments", indexes={@ORM\Index(name="ix_tourney_match_comments_match_id", columns={"match_id"}), @ORM\Index(name="IDX_2A5EDC0AB03A8386", columns={"created_by_id"}), @ORM\Index(name="IDX_2A5EDC0AD48D54E8", columns={"last_edited_by_id"}), @ORM\Index(name="IDX_2A5EDC0A750EF4DA", columns={"hidden_by_id"})})
 * @ORM\Entity
 */
class TourneyMatchComments
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tourney_match_comments_id_seq", allocationSize=1, initialValue=1)
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
     * @var \TourneyMatches
     *
     * @ORM\ManyToOne(targetEntity="TourneyMatches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="match_id", referencedColumnName="id")
     * })
     */
    private $match;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by_id", referencedColumnName="id")
     * })
     */
    private $createdBy;

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
