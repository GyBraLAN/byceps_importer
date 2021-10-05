<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsentSubjects
 *
 * @ORM\Table(name="consent_subjects", uniqueConstraints={@ORM\UniqueConstraint(name="consent_subjects_name_key", columns={"name"}), @ORM\UniqueConstraint(name="consent_subjects_title_key", columns={"title"})})
 * @ORM\Entity
 */
class ConsentSubjects
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="consent_subjects_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="checkbox_label", type="text", nullable=false)
     */
    private $checkboxLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="checkbox_link_target", type="text", nullable=true)
     */
    private $checkboxLinkTarget;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Brands", mappedBy="subject")
     */
    private $brand;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Users", mappedBy="subject")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->brand = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
