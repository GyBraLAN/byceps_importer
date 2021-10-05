<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAvatarSelections
 *
 * @ORM\Table(name="user_avatar_selections", uniqueConstraints={@ORM\UniqueConstraint(name="user_avatar_selections_avatar_id_key", columns={"avatar_id"})})
 * @ORM\Entity
 */
class UserAvatarSelections
{
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
     * @var \UserAvatars
     *
     * @ORM\ManyToOne(targetEntity="UserAvatars")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="avatar_id", referencedColumnName="id")
     * })
     */
    private $avatar;


}
