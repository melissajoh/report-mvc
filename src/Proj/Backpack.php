<?php

namespace App\Proj;

use App\Entity\Items;

/**
 * Backpack for playing the adventure game
 */
class Backpack
{
    /**
     * @var array<Items> $items in backpack
     */
    protected array $items;

    /**
     * Constructor initiating empty backpack
     */
    public function __construct()
    {
        $this->items = [];
    }

    /**
     * Add item to backpack
     * @param Items $item Item to add
     */
    public function add($item): void
    {
        $this->items[] = $item;
    }

    /**
     * Remove item from backpack
     * @param Items $item Item to remove
     */
    public function remove($item): void
    {
        // $key = array_search($item, $this->items);
        // if ($key) {
        //     unset($this->items[$key]);
        // }
        foreach (array_keys($this->items, $item) as $key) {
            unset($this->items[$key]);
        }
        // unset($this->items[$item]);
    }

    /**
     * Get items in backpack
     * @return array<Items>
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
