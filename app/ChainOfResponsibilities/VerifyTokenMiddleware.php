<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities;


class VerifyTokenMiddleware extends Handler
{
    protected $data = array();

    public function __construct ($data = array())
    {
        $this->data = $data;
    }

    protected function processing (RequestImpl $req)
    {
        echo "处理token";
        //调用下一个middleware
    }
}