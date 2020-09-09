<?php

namespace App\Entity;

use App\Repository\BookingsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookingsRepository::class)
 */
class Bookings
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="bookings")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity=Room::class, cascade={"persist", "remove"})
     */
    private $room;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $endDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(?Room $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeImmutable $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeImmutable $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
}
