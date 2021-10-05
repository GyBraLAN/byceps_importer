<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutgoingWebhooks
 *
 * @ORM\Table(name="outgoing_webhooks")
 * @ORM\Entity
 */
class OutgoingWebhooks
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="outgoing_webhooks_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var json|null
     *
     * @ORM\Column(name="event_selectors", type="json", nullable=true)
     */
    private $eventSelectors;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="text", nullable=false)
     */
    private $format;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_prefix", type="text", nullable=true)
     */
    private $textPrefix;

    /**
     * @var json|null
     *
     * @ORM\Column(name="extra_fields", type="json", nullable=true)
     */
    private $extraFields;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=false)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;


}
