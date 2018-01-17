<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\Test;


use MyApp\ChainOfResponsibilities\Filter\FilterChain;
use MyApp\ChainOfResponsibilities\Filter\Request;
use MyApp\ChainOfResponsibilities\Filter\Response;
use MyApp\ChainOfResponsibilities\Filter\SessionFilter;
use MyApp\ChainOfResponsibilities\Filter\TokenFilter;
use PHPUnit\Framework\TestCase;

class ChainFilterTest extends TestCase
{
    protected function setUp ()
    {
        require __DIR__ . '/../vendor/autoload.php';
    }

    public function test_filter ()
    {
        $filterChina = new FilterChain();
        //添加绑定
        $filterChina->addFilter(new SessionFilter())->addFilter(new TokenFilter());

        $request = new Request();
        $request->setRequestStr("request");
        $response = new Response();
        $response->setResponseStr("response");

        $filterChina->doFilter($request, $response, $filterChina);
        $this->assertEquals("request----->tokenDoFilterBegin----->sessionDoFilterBegin", $request->getRequestStr());
        $this->assertEquals("response--->sessionDoFilterEnd--->tokenDoFilterEnd", $response->getResponseStr());

    }
}