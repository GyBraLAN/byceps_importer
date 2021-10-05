<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SnippetVersions
 *
 * @ORM\Table(name="snippet_versions", indexes={@ORM\Index(name="ix_snippet_versions_snippet_id", columns={"snippet_id"}), @ORM\Index(name="IDX_65992B561220EA6", columns={"creator_id"})})
 * @ORM\Entity
 */
class SnippetVersions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="snippet_versions_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="head", type="text", nullable=true)
     */
    private $head;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_url_path", type="text", nullable=true)
     */
    private $imageUrlPath;

    /**
     * @var \Snippets
     *
     * @ORM\ManyToOne(targetEntity="Snippets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="snippet_id", referencedColumnName="id")
     * })
     */
    private $snippet;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creator_id", referencedColumnName="id")
     * })
     */
    private $creator;


}
