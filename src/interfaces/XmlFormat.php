<?php

namespace rkistaps\interfaces;

interface XmlFormat
{

    public function format(\rkistaps\classes\ItemList $list): \SimpleXMLElement;

}