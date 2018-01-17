<?php
/**
 * Date: 2018/1/11
 * User: lishuo
 */

namespace MyApp\Own;

//（观察者对象）
class UserObserver implements \SplObserver
{
     //观察者要实现的唯一方法 也是被 Subject 调用的方法
    public function update(\SplSubject $subject)
    {
        echo 'has been updated';
    }
}