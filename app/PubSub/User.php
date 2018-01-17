<?php
/**
 * Date: 2018/1/11
 * User: lishuo
 */

namespace MyApp;


class User
{
    private $event;

    public function __construct (EventGenerator $eventGenerator)
    {
        $this->event = $eventGenerator;
    }

    public function update ()
    {
        //开启事务 : 其实观察者模式，只不过是为了把代码逻辑给分开，其实还是在一个方法里面
        //用户升级为VIP
        //通知所有调用者
        $this->event->notify();
        //关闭事务
    }

    public function toString ()
    {
        return true;
    }
}