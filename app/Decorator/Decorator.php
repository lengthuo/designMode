<?php
/**
 * Date: 2018/1/12
 * User: lishuo
 */

namespace MyApp\Decorator;


abstract class Decorator implements RendererInterface
{
    protected $wrapped;
    /**
     * 必须类型声明装饰组件以便在子类中可以调用renderData()方法
     */
    public function __construct (RendererInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}