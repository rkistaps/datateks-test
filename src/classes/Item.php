<?php

namespace rkistaps\classes;

class Item
{

    private $data = [];

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }   

    public function __get($name)
    {
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }

    public function getData()
    {
        return $this->data;
    }

}