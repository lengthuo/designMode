<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities\Filter;


interface Filter
{
    public function doFilter (Request $request, Response $response, Filter $filter);
}