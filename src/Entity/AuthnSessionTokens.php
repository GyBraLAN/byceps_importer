<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthnSessionTokens
 *
 * @ORM\Table(name="authn_session_tokens", uniqueConstraints={@ORM\UniqueConstraint(name="ix_authn_session_tokens_token", columns={"token"})})
 * @ORM\Entity
 */
class AuthnSessionTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="text", nullable=false)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

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
