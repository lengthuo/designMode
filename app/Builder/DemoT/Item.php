<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


interface Item
{
    public function name ():string;

    public function packing ():Packing;

    public function price ():float;
}