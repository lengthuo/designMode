<?php
/**
 * Date: 2018/1/14
 * User: lishuo
 */

namespace MyApp\Decorator\Calculate;

/**
 * 运行环境
 * Class Context
 * @package MyApp\Decorator\Calculate
 */
class Context implements Strategy
{
    public $strategy;

    public function __construct (Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return Strategy
     */
    public function getStrategy ():Strategy
    {
        return $this->strategy;
    }

    /**
     * @param Strategy $strategy
     */
    public function setStrategy (Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function calculate (int $a, int $b)
    {
        return $this->strategy->calculate($a, $b);
    }

}