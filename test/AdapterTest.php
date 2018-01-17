<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\Test;


use MyApp\Adapter\Voltage220Impl;
use MyApp\Adapter\VoltageAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase {
    public function setUp ()
    {
        require __DIR__ . '/../vendor/autoload.php';
    }

    public function test_voltage5 ()
    {
        $dst = (new VoltageAdapter(new Voltage220Impl()))->out5V();
        $this->assertEquals(5, $dst);
    }

}