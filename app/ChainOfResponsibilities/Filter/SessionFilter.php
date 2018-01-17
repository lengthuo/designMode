<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities\Filter;


class SessionFilter implements Filter
{
    public function doFilter (Request $request, Response $response, Filter $filter)
    {
        $request->requestStr .= "----->sessionDoFilterBegin";

        $filter->doFilter($request, $response, $filter);

        $response->responseStr .= "--->sessionDoFilterEnd";
    }
}