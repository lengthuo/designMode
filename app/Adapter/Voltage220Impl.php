<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\Adapter;


class Voltage220Impl implements Voltage220
{
    public function out220V ():int
    {
        return 220;
    }
}