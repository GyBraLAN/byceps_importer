<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SnippetMountpoints
 *
 * @ORM\Table(name="snippet_mountpoints", uniqueConstraints={@ORM\UniqueConstraint(name="snippet_mountpoints_site_id_url_path_key", columns={"site_id", "url_path"}), @ORM\UniqueConstraint(name="snippet_mountpoints_site_id_endpoint_suffix_key", columns={"site_id", "endpoint_suffix"})}, indexes={@ORM\Index(name="ix_snippet_mountpoints_snippet_id", columns={"snippet_id"}), @ORM\Index(name="ix_snippet_mountpoints_site_id", columns={"site_id"})})
 * @ORM\Entity
 */
class SnippetMountpoints
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="snippet_mountpoints_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="endpoint_suffix", type="text", nullable=false)
     */
    private $endpointSuffix;

    /**
     * @var string
     *
     * @ORM\Column(name="url_path", type="text", nullable=false)
     */
    private $urlPath;

    /**
     * @var \Sites
     *
     * @ORM\ManyToOne(targetEntity="Sites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     * })
     */
    private $site;

    /**
     * @var \Snippets
     *
     * @ORM\ManyToOne(targetEntity="Snippets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="snippet_id", referencedColumnName="id")
     * })
     */
    private $snippet;


}
