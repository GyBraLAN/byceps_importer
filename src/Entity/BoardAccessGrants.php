<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoardAccessGrants
 *
 * @ORM\Table(name="board_access_grants", indexes={@ORM\Index(name="ix_board_access_grants_user_id", columns={"user_id"}), @ORM\Index(name="ix_board_access_grants_board_id", columns={"board_id"})})
 * @ORM\Entity
 */
class BoardAccessGrants
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="board_access_grants_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \Boards
     *
     * @ORM\ManyToOne(targetEntity="Boards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="board_id", referencedColumnName="id")
     * })
     */
    private $board;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
