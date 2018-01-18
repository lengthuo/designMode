<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Test;


use MyApp\Builder\BuilderInterfaceImpl;
use MyApp\Builder\Car;
use MyApp\Builder\DemoT\MealBuilder;
use MyApp\Builder\Director;
use PHPUnit\Framework\TestCase;

class BuilderDemoTTest extends TestCase
{
    protected function setUp ()
    {
        require __DIR__ . '/../vendor/autoload.php';
    }

    public function test_demo ()
    {
        $mealBuilder = new MealBuilder();
        $mealBuilder = $mealBuilder->prepareVegMeal();

        //多少钱
        $cost = $mealBuilder->getCost();
        $this->assertEquals(30, $cost);
        //里面都有什么
        //        $item = $mealBuilder->showItem();


    }
}