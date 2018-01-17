<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities\Filter;


class FilterChain implements Filter
{
    protected $filterArray = [];

    //入栈 添加规则
    public function addFilter (Filter $filter)
    {
        array_push($this->filterArray, $filter);
        return $this;
    }
    //出栈
    public function doFilter (Request $request, Response $response, Filter $filter)
    {
        if (count($this->filterArray) != 0) {
            $res = array_pop($this->filterArray);
            $res->doFilter($request, $response, $filter);
        }
    }
}