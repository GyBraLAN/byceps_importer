<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="users_screen_name_key", columns={"screen_name"}), @ORM\UniqueConstraint(name="users_email_address_key", columns={"email_address"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="users_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="screen_name", type="text", nullable=true)
     */
    private $screenName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_address", type="text", nullable=true)
     */
    private $emailAddress;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_address_verified", type="boolean", nullable=false)
     */
    private $emailAddressVerified;

    /**
     * @var bool
     *
     * @ORM\Column(name="initialized", type="boolean", nullable=false)
     */
    private $initialized;

    /**
     * @var bool
     *
     * @ORM\Column(name="suspended", type="boolean", nullable=false)
     */
    private $suspended;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locale", type="text", nullable=true)
     */
    private $locale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="legacy_id", type="text", nullable=true)
     */
    private $legacyId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AuthzRoles", inversedBy="user")
     * @ORM\JoinTable(name="authz_user_roles",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     *   }
     * )
     */
    private $role;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Brands", mappedBy="user")
     */
    private $brand;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ConsentSubjects", inversedBy="user")
     * @ORM\JoinTable(name="consents",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="subject_id", referencedColumnName="id")
     *   }
     * )
     */
    private $subject;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Parties", inversedBy="user")
     * @ORM\JoinTable(name="user_archived_party_attendances",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="party_id", referencedColumnName="id")
     *   }
     * )
     */
    private $party;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="BoardCategories", inversedBy="user")
     * @ORM\JoinTable(name="board_categories_lastviews",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     *   }
     * )
     */
    private $category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="BoardTopics", inversedBy="user")
     * @ORM\JoinTable(name="board_topics_lastviews",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     *   }
     * )
     */
    private $topic;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
        $this->brand = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subject = new \Doctrine\Common\Collections\ArrayCollection();
        $this->party = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->topic = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
