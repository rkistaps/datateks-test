<?php

namespace rkistaps\classes;

class DefaultXmlFormat implements \rkistaps\interfaces\XmlFormat
{

    public function format(\rkistaps\classes\ItemList $list): \SimpleXMLElement
    {
        
        $xml = $this->createXml($list);

        return $xml;

    }

    
    private function createXml(ItemList $list)
    {

        $xml = new \SimpleXMLElement('<xml/>');
        foreach ($list->get() as $item) {

            $elem = $xml->addChild('item');
            $this->addToNode($elem, $item->getData());

        }

        return $xml;

    }

    private function addToNode(\SimpleXMLElement $node, array $data)
    {

        if(is_string($data)){
            $node[0] = $data;
        }elseif (is_array($data)) {
            
            foreach ($data as $key => $value) {
                
                $key = is_int($key) ? 'item' . $key : $key;

                if(is_string($value)){
                    $node->addChild($key, $value);
                }elseif (is_array($value)) {
                    $n_node = $node->addChild($key);
                    $this->addToNode($n_node, $value);
                }

            }

        }

    }

}