<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder\DemoT;


class PackingWrapper implements Packing
{
    public function pack ():string
    {
        return "Wrapper"; //袋子包装
    }

}