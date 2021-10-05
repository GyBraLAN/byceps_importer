<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SnippetCurrentVersions
 *
 * @ORM\Table(name="snippet_current_versions", uniqueConstraints={@ORM\UniqueConstraint(name="snippet_current_versions_version_id_key", columns={"version_id"})})
 * @ORM\Entity
 */
class SnippetCurrentVersions
{
    /**
     * @var \Snippets
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Snippets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="snippet_id", referencedColumnName="id")
     * })
     */
    private $snippet;

    /**
     * @var \SnippetVersions
     *
     * @ORM\ManyToOne(targetEntity="SnippetVersions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="version_id", referencedColumnName="id")
     * })
     */
    private $version;


}
