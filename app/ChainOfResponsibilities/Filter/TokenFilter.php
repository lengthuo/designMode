<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities\Filter;


class TokenFilter implements Filter
{

    public function doFilter (Request $request, Response $response, Filter $filter)
    {
        $request->requestStr .= "----->tokenDoFilterBegin";

        $filter->doFilter($request, $response, $filter);

        $response->responseStr .= "--->tokenDoFilterEnd";
    }
}