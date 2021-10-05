<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrgaTeamMemberships
 *
 * @ORM\Table(name="orga_team_memberships", uniqueConstraints={@ORM\UniqueConstraint(name="orga_team_memberships_orga_team_id_user_id_key", columns={"orga_team_id", "user_id"})}, indexes={@ORM\Index(name="ix_orga_team_memberships_orga_team_id", columns={"orga_team_id"}), @ORM\Index(name="ix_orga_team_memberships_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class OrgaTeamMemberships
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="orga_team_memberships_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duties", type="text", nullable=true)
     */
    private $duties;

    /**
     * @var \OrgaTeams
     *
     * @ORM\ManyToOne(targetEntity="OrgaTeams")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orga_team_id", referencedColumnName="id")
     * })
     */
    private $orgaTeam;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
