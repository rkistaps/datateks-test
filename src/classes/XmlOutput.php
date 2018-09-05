<?php

namespace rkistaps\classes;

class XmlOutput implements \rkistaps\interfaces\Output
{

    private $formatter;

    public function __construct(\rkistaps\interfaces\XmlFormat $formatter)
    {
        $this->formatter = $formatter;
    }

    public function output(ItemList $list)
    {

        $xml = $this->formatter->format($list);

        header('Content-type: text/xml');
        echo $xml->asXML();

    }

}
