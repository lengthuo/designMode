<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


class MealBuilder
{
    /**
     * 第一种组合
     *
     * @return Meal
     */
    public function prepareVegMeal ():Meal
    {
        $meal = new Meal();
        $meal->addItem(new VegBurger());
        $meal->addItem(new Coke());
        return $meal;
    }

    /**
     * 第二种组合
     *
     * @return Meal
     */
    public function prepareNonVegMeal ():Meal
    {
        $meal = new Meal();
        $meal->addItem(new ChickenBurger());
        $meal->addItem(new Pepsi());
        return $meal;
    }
}