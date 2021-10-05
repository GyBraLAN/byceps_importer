<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartySettings
 *
 * @ORM\Table(name="party_settings", indexes={@ORM\Index(name="IDX_49EBA81A213C1059", columns={"party_id"})})
 * @ORM\Entity
 */
class PartySettings
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var \Parties
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Parties")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="party_id", referencedColumnName="id")
     * })
     */
    private $party;


}
