<?php
/**
 * Date: 2018/1/11
 * User: lishuo
 */

namespace MyApp\Own;

/**
 * 观察者模式 : 被观察对象 (主体对象)
 * 主体对象维护观察者列表并发送通知
 */
class User implements \SplSubject  //主题
{
    protected $data = [];

    protected $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();//这个对象防止重复注册
    }
    //注册一个观察者
    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    //删除观察者
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    // 通知观察者方法
    public function notify()
    {
        /** @var \SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    //一旦修改用户信息，就会触发此方法，来通知所有对象
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
        // 通知观察者用户被改变
        $this->notify();
    }
}