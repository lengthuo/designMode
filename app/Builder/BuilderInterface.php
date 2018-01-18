<?php
/**
 * Date: 2018/1/17
 * User: lishuo
 */

namespace MyApp\Builder;


interface BuilderInterface
{
    public function createVehicle ();

    public function addWheel ();

    public function addEngine ();

    public function addDoors ();

    public function getVehicle ():Car;
}