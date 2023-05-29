<?php

namespace App\Entity;

use App\Repository\RoomsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * @SuppressWarnings(PHPMD)
 */
#[ORM\Entity(repositoryClass: RoomsRepository::class)]
class Rooms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[ORM\OneToMany(targetEntity: Items::class, mappedBy: 'room_id')]
    private ?int $room_id = null;

    #[ORM\Column(length: 255)]
    private ?string $room_name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $north = null;

    #[ORM\Column(nullable: true)]
    private ?int $east = null;

    #[ORM\Column(nullable: true)]
    private ?int $south = null;

    #[ORM\Column(nullable: true)]
    private ?int $west = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $n_lock = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $e_lock = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $s_lock = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $w_lock = null;

    public function getId(): ?int
    {
        return $this->room_id;
    }

    public function getRoomName(): ?string
    {
        return $this->room_name;
    }

    public function setRoomName(string $room_name): self
    {
        $this->room_name = $room_name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNorth(): ?int
    {
        return $this->north;
    }

    public function setNorth(?int $north): self
    {
        $this->north = $north;

        return $this;
    }

    public function getEast(): ?int
    {
        return $this->east;
    }

    public function setEast(?int $east): self
    {
        $this->east = $east;

        return $this;
    }

    public function getSouth(): ?int
    {
        return $this->south;
    }

    public function setSouth(?int $south): self
    {
        $this->south = $south;

        return $this;
    }

    public function getWest(): ?int
    {
        return $this->west;
    }

    public function setWest(?int $west): self
    {
        $this->west = $west;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getNLock(): ?string
    {
        return $this->n_lock;
    }

    public function setNLock(?string $n_lock): self
    {
        $this->n_lock = $n_lock;

        return $this;
    }

    public function getELock(): ?string
    {
        return $this->e_lock;
    }

    public function setELock(?string $e_lock): self
    {
        $this->e_lock = $e_lock;

        return $this;
    }

    public function getSLock(): ?string
    {
        return $this->s_lock;
    }

    public function setSLock(?string $s_lock): self
    {
        $this->s_lock = $s_lock;

        return $this;
    }

    public function getWLock(): ?string
    {
        return $this->w_lock;
    }

    public function setWLock(?string $w_lock): self
    {
        $this->w_lock = $w_lock;

        return $this;
    }
}
