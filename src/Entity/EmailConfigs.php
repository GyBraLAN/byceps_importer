<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailConfigs
 *
 * @ORM\Table(name="email_configs")
 * @ORM\Entity
 */
class EmailConfigs
{
    /**
     * @var string
     *
     * @ORM\Column(name="sender_address", type="text", nullable=false)
     */
    private $senderAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sender_name", type="text", nullable=true)
     */
    private $senderName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_address", type="text", nullable=true)
     */
    private $contactAddress;

    /**
     * @var \Brands
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;


}
