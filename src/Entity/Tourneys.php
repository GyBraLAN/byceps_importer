<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tourneys
 *
 * @ORM\Table(name="tourneys", uniqueConstraints={@ORM\UniqueConstraint(name="tourneys_category_id_title_key", columns={"category_id", "title"})}, indexes={@ORM\Index(name="ix_tourneys_party_id", columns={"party_id"}), @ORM\Index(name="ix_tourneys_category_id", columns={"category_id"})})
 * @ORM\Entity
 */
class Tourneys
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tourneys_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle", type="text", nullable=true)
     */
    private $subtitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo_url", type="text", nullable=true)
     */
    private $logoUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="max_participant_count", type="integer", nullable=false)
     */
    private $maxParticipantCount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starts_at", type="datetime", nullable=false)
     */
    private $startsAt;

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
     * @var \TourneyCategories
     *
     * @ORM\ManyToOne(targetEntity="TourneyCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;


}
