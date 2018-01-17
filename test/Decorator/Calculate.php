<?php
/**
 * Date: 2018/1/12
 * User: lishuo
 */

class TestDemo extends \PHPUnit_Framework_TestCase
{
    private $context;

    public function setUp ()
    {
        require __DIR__ . '/../../vendor/autoload.php';
        $addStrategy = new \MyApp\Decorator\Calculate\AddStrategy();
        $this->context = new \MyApp\Decorator\Calculate\Context($addStrategy);
    }


    public function test_addStrategy ()
    {
        $this->assertEquals(2, $this->context->calculate(1, 1));
    }

    public function test_subStrategy ()
    {
        $subStrategy = new \MyApp\Decorator\Calculate\SubStrategy();
        $this->context->setStrategy($subStrategy);
        $this->assertEquals(0, $subStrategy->calculate(1, 1));
    }

}