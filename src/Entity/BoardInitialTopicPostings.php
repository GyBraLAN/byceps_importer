<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardInitialTopicPostings
 *
 * @ORM\Table(name="board_initial_topic_postings", uniqueConstraints={@ORM\UniqueConstraint(name="board_initial_topic_postings_posting_id_key", columns={"posting_id"})})
 * @ORM\Entity
 */
class BoardInitialTopicPostings
{
    /**
     * @var \BoardTopics
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="BoardTopics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     * })
     */
    private $topic;

    /**
     * @var \BoardPostings
     *
     * @ORM\ManyToOne(targetEntity="BoardPostings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="posting_id", referencedColumnName="id")
     * })
     */
    private $posting;


}
