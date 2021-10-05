<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthzRolePermissions
 *
 * @ORM\Table(name="authz_role_permissions", indexes={@ORM\Index(name="IDX_1F45EF34D60322AC", columns={"role_id"})})
 * @ORM\Entity
 */
class AuthzRolePermissions
{
    /**
     * @var string
     *
     * @ORM\Column(name="permission_id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $permissionId;

    /**
     * @var \AuthzRoles
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AuthzRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;


}
