<?php
/**
 * Date: 2018/1/14
 * User: lishuo
 */

namespace MyApp\Decorator\Calculate;


interface Strategy
{
    public function calculate (int $a, int $b);
}