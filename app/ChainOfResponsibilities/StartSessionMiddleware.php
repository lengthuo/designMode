<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities;


class StartSessionMiddleware extends Handler
{

    protected $data = [];

    public function __construct ($data = [])
    {
        $this->data = $data;
    }

    protected function processing (RequestImpl $req)
    {
        echo "session的开启";
        //调用下一个middleware
    }
}