<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsItemCurrentVersions
 *
 * @ORM\Table(name="news_item_current_versions", uniqueConstraints={@ORM\UniqueConstraint(name="news_item_current_versions_version_id_key", columns={"version_id"})})
 * @ORM\Entity
 */
class NewsItemCurrentVersions
{
    /**
     * @var \NewsItems
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="NewsItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

    /**
     * @var \NewsItemVersions
     *
     * @ORM\ManyToOne(targetEntity="NewsItemVersions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="version_id", referencedColumnName="id")
     * })
     */
    private $version;


}
