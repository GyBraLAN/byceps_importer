<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterLists
 *
 * @ORM\Table(name="newsletter_lists")
 * @ORM\Entity
 */
class NewsletterLists
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="text", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="newsletter_lists_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;


}
