<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder;


class Director
{

    /**
     * 场景：导演需要一辆车，他不需要关注怎么做，只需要把建造者叫过来，然后建造者返回给他一辆车。
     */
    public function builder (BuilderInterface $builder)
    {
        //导演只知道这辆车是如何组成的,具体创建不需要关系
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();
        return $builder->getVehicle();
    }
}