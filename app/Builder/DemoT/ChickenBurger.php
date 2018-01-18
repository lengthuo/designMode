<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


class ChickenBurger extends Burger
{

    public function price ():float
    {
        return (float)30.00;
    }

    public function name ():string
    {
        return (string)"ChickenBurger";
    }
}