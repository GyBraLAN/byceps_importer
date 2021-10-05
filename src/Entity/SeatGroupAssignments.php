<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SeatGroupAssignments
 *
 * @ORM\Table(name="seat_group_assignments", uniqueConstraints={@ORM\UniqueConstraint(name="ix_seat_group_assignments_seat_id", columns={"seat_id"})}, indexes={@ORM\Index(name="ix_seat_group_assignments_group_id", columns={"group_id"})})
 * @ORM\Entity
 */
class SeatGroupAssignments
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="seat_group_assignments_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \SeatGroups
     *
     * @ORM\ManyToOne(targetEntity="SeatGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \Seats
     *
     * @ORM\ManyToOne(targetEntity="Seats")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seat_id", referencedColumnName="id")
     * })
     */
    private $seat;


}
