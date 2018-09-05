<?php

namespace rkistaps\classes;

class ItemList
{

    private $items = [];

    public function add(Item $item)
    {
        $this->items[] = $item;
    }

    public function get(): array
    {
        return $this->items;
    }

}