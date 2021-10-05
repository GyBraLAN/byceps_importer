<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Snippets
 *
 * @ORM\Table(name="snippets", uniqueConstraints={@ORM\UniqueConstraint(name="snippets_scope_type_scope_name_name_key", columns={"scope_type", "scope_name", "name"})}, indexes={@ORM\Index(name="ix_snippets_name", columns={"name"}), @ORM\Index(name="ix_snippets_scope", columns={"scope_type", "scope_name"})})
 * @ORM\Entity
 */
class Snippets
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="snippets_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="scope_type", type="text", nullable=false)
     */
    private $scopeType;

    /**
     * @var string
     *
     * @ORM\Column(name="scope_name", type="text", nullable=false)
     */
    private $scopeName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", nullable=false)
     */
    private $type;


}
