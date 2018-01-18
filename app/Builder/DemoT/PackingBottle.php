<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


class PackingBottle implements Packing
{

    public function pack ():string
    {
        return "Bottle"; //瓶子包装
    }
}