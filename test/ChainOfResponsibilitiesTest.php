<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\Test;


use MyApp\ChainOfResponsibilities\FastStorage;
use MyApp\ChainOfResponsibilities\RequestImpl;
use MyApp\ChainOfResponsibilities\SlowStorage;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase
{
    protected $chain;

    public function setUp ()
    {
        require __DIR__ . '/../vendor/autoload.php';

        $this->chain = new FastStorage(['bar' => 'baz']);
        $this->chain->append(new SlowStorage(['bar' => 'baz', 'foo' => 'bar']));
    }

    public function makeRequest ()
    {
        $request = new RequestImpl();
        $request->verb = 'get';
        return [[$request]];
    }

    /**
     * @dataProvider makeRequest
     */
    public function test_fast_storage ($request)
    {
        var_dump($request);
        $request->key = 'bar';
        $ret = $this->chain->handle($request);
        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('baz', $request->response);

    }

    public function test_slow_storage ($request)
    {
        $request->key = 'foo';
        $ret = $this->chain->handle($request);
        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('bar', $request->response);
    }

}