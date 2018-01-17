<?php
/**
 * Date: 2018/1/11
 * User: lishuo
 */

namespace MyApp;

class  EventGenerator
{
    private $server = [];

    //注册
    public function add(UserUpdate $server)
    {
        $this->server[] = $server;
    }

    //一旦事件触发，就通知所有的对象，调用update方法
    public function notify()
    {
        foreach ($this->server as $item) {
            $item->userUpdate();
        }
    }

}