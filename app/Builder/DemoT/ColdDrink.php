<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


abstract class ItemColdDrink implements Item
{
    public function packing ():Packing
    {
        return new Bottle();
    }

    public abstract function price ():float;
}