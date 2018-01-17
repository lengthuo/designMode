<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities\Filter;

class Response
{

    public $responseStr;

    /**
     * @return mixed
     */
    public function getResponseStr ()
    {
        return $this->responseStr;
    }

    /**
     * @param mixed $responseStr
     */
    public function setResponseStr ($responseStr)
    {
        $this->responseStr = $responseStr;
    }

}