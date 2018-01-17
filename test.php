<?php
require __DIR__.'/vendor/autoload.php';





$webServices = new \MyApp\Decorator\Webservice(["asd"=>'asd']);
//$jsonData = new \MyApp\Decorator\ReadXml($webServices);
$jsonData = new \MyApp\Decorator\ReadJson($webServices);
$res= $jsonData->renderData();
var_dump($res);









////方法1：手写观察者模式
////注册进容器中去
//$event = new \MyApp\EventGenerator();
//$user = new \MyApp\User($event);
////添加注册列表
//$event->add(new \MyApp\Coupon());
//$event->add(new \MyApp\Order());
//$user->update();

//方法2：php自带观察者模式的方法
