<?php

namespace rkistaps\interfaces;

interface DataSource
{

    public function fetch(): ?\rkistaps\classes\ItemList;

}