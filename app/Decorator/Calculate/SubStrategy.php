<?php
/**
 * Date: 2018/1/14
 * User: lishuo
 */

namespace MyApp\Decorator\Calculate;


class SubStrategy implements Strategy
{
    public function calculate (int $a, int $b)
    {
        return $a - $b;
    }
}