<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


class Coke extends ColdDrink
{

    public function price ():float
    {
        return (float)10.00;
    }

    public function name ():string
    {
        return (string)"Coke";
    }
}