<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */
namespace MyApp\ChainOfResponsibilities\Filter;

class Request
{
    public $requestStr;

    /**
     * @return mixed
     */
    public function getRequestStr ()
    {
        return $this->requestStr;
    }

    /**
     * @param mixed $requestStr
     */
    public function setRequestStr ($requestStr)
    {
        $this->requestStr = $requestStr;
    }

}