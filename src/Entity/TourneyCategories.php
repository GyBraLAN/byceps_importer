<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TourneyCategories
 *
 * @ORM\Table(name="tourney_categories", uniqueConstraints={@ORM\UniqueConstraint(name="tourney_categories_party_id_title_key", columns={"party_id", "title"})}, indexes={@ORM\Index(name="ix_tourney_categories_party_id", columns={"party_id"})})
 * @ORM\Entity
 */
class TourneyCategories
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tourney_categories_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var \Parties
     *
     * @ORM\ManyToOne(targetEntity="Parties")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="party_id", referencedColumnName="id")
     * })
     */
    private $party;


}
