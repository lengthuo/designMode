<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder;


class BuilderInterfaceImpl implements BuilderInterface
{
    public function createVehicle ()
    {

    }

    public function addWheel ()
    {

    }

    public function addEngine ()
    {

    }

    public function addDoors ()
    {

    }

    public function getVehicle ():Car
    {
        return new Car();
    }
}