<?php
// api/src/Entity/Jamster.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * An owner of a task.
 *
 * @ORM\Entity
 */
#[ApiResource]
class Jamster
{
    /**
     * The id of this jamster.
     *
     */
    private ?string $uuid = null; //TODO UUID

    /**
     * The discord ID of the Jamster
     *
     */
    public ?string $discordId = null;

    /**
     * The discord username
     *
     */
    public ?string $discordName = null;

    /**
     * Date of last change.
     *
     */
    public ?DateTimeInterface $updated = null;

    /**
     * Date of creation.
     *
     */
    public ?DateTimeInterface $created = null;

    /** @var Task[] Available reviews for this book. */
    public iterable $tasks;

    public function __construct()
    {
        $this->tasks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
