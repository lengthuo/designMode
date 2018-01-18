<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Test;


use MyApp\Builder\BuilderInterfaceImpl;
use MyApp\Builder\Car;
use MyApp\Builder\Director;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    protected function setUp ()
    {
        require __DIR__ . '/../vendor/autoload.php';
    }

    public function test_demo ()
    {
        $builder = new BuilderInterfaceImpl();//创造者
        $director = new Director();//导演

        $res = $director->builder($builder);
        $this->assertInstanceOf(Car::class, $res);

    }
}