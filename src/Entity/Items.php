<?php

namespace App\Entity;

use App\Repository\ItemsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * @SuppressWarnings(PHPMD)
 */
#[ORM\Entity(repositoryClass: ItemsRepository::class)]
class Items
{
    #[ORM\Id]
    #ORM\GeneratedValue(strategy="NONE")
    #[ORM\Column]
    private ?string $item_id = null;

    #[ORM\Column(length: 255)]
    private ?string $item_name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $use_desc = null;

    #[ORM\Column]
    #[ORM\ManyToOne(targetEntity: Rooms::class, inversedBy: 'room_id')]
    #[ORM\JoinColumn(name: 'room_id', referencedColumnName: 'room_id')]
    private ?int $room_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grab = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lift = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hidden_under = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $usable = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $locked = null;

    public function getItemId(): ?string
    {
        return $this->item_id;
    }

    public function setItemId(string $item_id): self
    {
        $this->item_id = $item_id;

        return $this;
    }

    public function getItemName(): ?string
    {
        return $this->item_name;
    }

    public function setItemName(string $item_name): self
    {
        $this->item_name = $item_name;

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

    public function getUseDesc(): ?string
    {
        return $this->use_desc;
    }

    public function setUseDesc(string $use_desc): self
    {
        $this->use_desc = $use_desc;

        return $this;
    }

    public function getRoomId(): ?int
    {
        return $this->room_id;
    }

    public function setRoomId(int $room_id): self
    {
        $this->room_id = $room_id;

        return $this;
    }

    public function getGrab(): ?string
    {
        return $this->grab;
    }

    public function setGrab(string $grab): self
    {
        $this->grab = $grab;

        return $this;
    }

    public function getLift(): ?string
    {
        return $this->lift;
    }

    public function setLift(string $lift): self
    {
        $this->lift = $lift;

        return $this;
    }

    public function getHiddenUnder(): ?string
    {
        return $this->hidden_under;
    }

    public function setHiddenUnder(?string $hidden_under): self
    {
        $this->hidden_under = $hidden_under;

        return $this;
    }

    public function getUsable(): ?string
    {
        return $this->usable;
    }

    public function setUsable(?string $usable): self
    {
        $this->usable = $usable;

        return $this;
    }

    public function getLocked(): ?string
    {
        return $this->locked;
    }

    public function setLocked(?string $locked): self
    {
        $this->locked = $locked;

        return $this;
    }
}
