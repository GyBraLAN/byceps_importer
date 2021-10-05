<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthnCredentials
 *
 * @ORM\Table(name="authn_credentials")
 * @ORM\Entity
 */
class AuthnCredentials
{
    /**
     * @var string
     *
     * @ORM\Column(name="password_hash", type="text", nullable=false)
     */
    private $passwordHash;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \Users
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
