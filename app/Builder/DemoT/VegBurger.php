<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


class VegBurger extends Burger
{
    public function price ():float
    {
        return "20.00";
    }

    public function name ():string
    {
        return "VegBurger";
    }


}