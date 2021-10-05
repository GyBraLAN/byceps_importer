<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TourneyMatches
 *
 * @ORM\Table(name="tourney_matches")
 * @ORM\Entity
 */
class TourneyMatches
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tourney_matches_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;


}
