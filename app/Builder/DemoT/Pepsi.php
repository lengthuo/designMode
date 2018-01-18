<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


class Pepsi extends ColdDrink
{

    public function price ():float
    {
        return (float)20.00;
    }

    public function name ():string
    {
        return "Pepsi";
    }
}