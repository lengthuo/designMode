<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\Adapter;

/**
 *
 * 重要的是了解思想
 * src：原本有一个接口220v电压，
 * dst：需要一个5V的电压。
 *
 * 对象适配器：持有src的对象，实现dst接口即可
 */
class VoltageAdapter implements Voltage5
{
    protected $voltage220;

    public function __construct (Voltage220 $voltage220)
    {
        $this->voltage220 = $voltage220;
    }

    public function out5V ()
    {
        return $this->voltage220->out220V() / 44;
    }


}