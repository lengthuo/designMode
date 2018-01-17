<?php
/**
 * Date: 2018/1/11
 * User: lishuo
 */

namespace MyApp;


class Coupon implements UserUpdate
{
    public function handle()
    {
        echo "用户更新（vip升级），添加一张卡券";
    }
}