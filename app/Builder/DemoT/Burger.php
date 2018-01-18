<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


abstract class ItemBurger implements Item
{
    public function packing ():Packing
    {
        return new PackingWrapper();
    }

    public abstract function price ():float;
}