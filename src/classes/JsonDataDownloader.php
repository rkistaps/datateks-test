<?php

namespace rkistaps\classes;

class JsonDataDownloader implements \rkistaps\interfaces\DataSource
{

    private $url;

    public function __construct($url)
    {
        
        $this->url = $url;

    }

    public function fetch(): ?ItemList
    {

        $list = new ItemList;

        $data = file_get_contents($this->url);
        if($data){

            foreach (json_decode($data, true) as $key => $value) {
                
                $item = new Item($value);
                $list->add($item);

            }

        }

        return $list;

    }



}