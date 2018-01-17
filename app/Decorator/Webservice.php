<?php
/**
 * Date: 2018/1/12
 * User: lishuo
 */

namespace MyApp\Decorator;


class Webservice implements RendererInterface
{
    protected $data;
    public function __construct ($data)
    {
        $this->data = $data;
    }
    public function returnData ()
    {
        return $this->data; //直接返回数据 //后期扩展需要返回json 和xml格式的数据
    }

}