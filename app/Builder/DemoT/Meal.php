<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


class Meal
{
    protected $item = [];

    public function addItem (Item $item)
    {
        array_push($this->item,$item);
    }

    public function getCost ():string
    {
        $price = 0;
        foreach ($this->item as $item) {
            $price += $item->price();
        }
        return (string)$price;
    }


    public function showItem ():string
    {
        $res = "";
        foreach ($this->item as $item) {
            $res .= "--" . $item->name();
        }
        return $res;
    }

}