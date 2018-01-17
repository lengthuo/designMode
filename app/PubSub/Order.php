<?php
/**
 * Date: 2018/1/11
 * User: lishuo
 */

namespace MyApp;


class Order implements UserUpdate
{
    public function handle()
    {
        echo "用户更新（vip升级），送一笔体验金的订单";
    }
}