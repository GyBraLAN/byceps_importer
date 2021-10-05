<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterSubscriptionUpdates
 *
 * @ORM\Table(name="newsletter_subscription_updates", indexes={@ORM\Index(name="IDX_5C99E7A2A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_5C99E7A23DAE168B", columns={"list_id"})})
 * @ORM\Entity
 */
class NewsletterSubscriptionUpdates
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expressed_at", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $expressedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="text", nullable=false)
     */
    private $state;

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

    /**
     * @var \NewsletterLists
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="NewsletterLists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="list_id", referencedColumnName="id")
     * })
     */
    private $list;


}
