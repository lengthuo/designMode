<?php
/**
 * Date: 2018/1/12
 * User: lishuo
 */

namespace MyApp\Decorator;


class ReadXml extends Decorator
{
    /**
     * render data as XML
     * @return mixed|string
     */
    public function returnData ()
    {
        $output = $this->wrapped->returnData();
        // do some fancy conversion to xml from array ...
        $doc = new \DOMDocument();
        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }
        return $doc->saveXML();
    }
}