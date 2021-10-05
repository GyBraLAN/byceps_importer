<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrgaTeams
 *
 * @ORM\Table(name="orga_teams", uniqueConstraints={@ORM\UniqueConstraint(name="orga_teams_party_id_title_key", columns={"party_id", "title"})}, indexes={@ORM\Index(name="ix_orga_teams_party_id", columns={"party_id"})})
 * @ORM\Entity
 */
class OrgaTeams
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="orga_teams_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
