<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VerificationTokens
 *
 * @ORM\Table(name="verification_tokens", indexes={@ORM\Index(name="ix_verification_tokens_purpose", columns={"purpose"}), @ORM\Index(name="ix_verification_tokens_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class VerificationTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="verification_tokens_token_seq", allocationSize=1, initialValue=1)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="purpose", type="text", nullable=false)
     */
    private $purpose;

    /**
     * @var json|null
     *
     * @ORM\Column(name="data", type="json", nullable=true)
     */
    private $data;

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
