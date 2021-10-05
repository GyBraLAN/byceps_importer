<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthnRecentLogins
 *
 * @ORM\Table(name="authn_recent_logins")
 * @ORM\Entity
 */
class AuthnRecentLogins
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="occurred_at", type="datetime", nullable=false)
     */
    private $occurredAt;

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
