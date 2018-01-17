<?php
/**
 * Date: 2018/1/12
 * User: lishuo
 */

namespace MyApp\Test;

use MyApp\Decorator\ReadJson;
use MyApp\Decorator\ReadXml;
use MyApp\Decorator\Webservice;

class TestDemo extends \PHPUnit_Framework_TestCase
{
    private $services;

    public function setUp ()
    {
        require __DIR__ . '/../vendor/autoload.php';
        $this->services = new Webservice(['hello' => 'word']);
    }

    public function test_return_json ()
    {
        $this->assertTrue(true);
        $jsonServices = new ReadJson($this->services);
        $this->assertEquals('{"hello":"word"}', $jsonServices->returnData());
    }

    public function test_return_xml ()
    {
        $xmlServices = new ReadXml($this->services);
        $xml = '<?xml version="1.0"?><hello>word</hello>';
        $this->assertXmlStringEqualsXmlString($xml, $xmlServices->returnData());
    }
}