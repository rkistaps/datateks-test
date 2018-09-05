<?php

namespace rkistaps\classes;

class App
{

    private $data;

    public function loadData(\rkistaps\interfaces\DataSource $interface)
    {

        $this->data = $interface->fetch();

    }

    public function output(\rkistaps\interfaces\Output $interface)
    {

        $interface->output($this->data);

    }

}