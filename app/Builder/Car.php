<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder;


class Car
{
    protected $name;

    public function getName ()
    {
        return $this->name;
    }

    public function setName ($name)
    {
        $this->name = $name;
    }

}