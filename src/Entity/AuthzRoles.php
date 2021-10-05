<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthzRoles
 *
 * @ORM\Table(name="authz_roles", uniqueConstraints={@ORM\UniqueConstraint(name="authz_roles_title_key", columns={"title"})})
 * @ORM\Entity
 */
class AuthzRoles
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="authz_roles_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Users", mappedBy="role")
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
