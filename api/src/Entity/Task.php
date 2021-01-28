<?php
// api/src/Entity/Task.php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A task.
 *
 * @ORM\Entity
 */
#[ApiResource]
class Task
{
    /**
     * The id of this task.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?string $uuid = null; //TODO UUID

    /**
     * The task content itself
     *
     * @ORM\Column(type="text")
     */
    public string $description = '';

    /**
     * Whether the task is complete.
     *
     * @ORM\Column(type=boolean)
     */
    public bool $state = false;

    /**
     * Whether to remind daily or not.
     *
     * @ORM\Column(type=boolean)
     */
    public bool $reminders = false;

    /**
     * Date of last change.
     *
     * @ORM\Column(type="datetime")
     */
    public ?\DateTimeInterface $updated = null;

    /**
     * Date of creation.
     *
     * @ORM\Column(type="datetime_immutable")
     */
    public ?\DateTimeInterface $created = null;

    /** @var Jamster[] Owner of this task. */
    public iterable $jamster;

    public function getId(): ?int
    {
        return $this->id;
    }
}
