<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities;

class RequestImpl implements Request
{

    public function __set ($name, $value)
    {
        $this->$name = $value;
    }

    public function __get ($name)
    {
        return $this->$name;
    }
}