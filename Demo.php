<?php
/**
 * 全是数组的用法
 */
//$a1 = ["a" => 1, 2, 3]; //这个数组 后面默认键值对会递增的
//$a2 = [4, 5, 6];
//$a3 = array_merge($a1, $a2);
////array_merge() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。
////如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。
////然而，如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。
//$a3 = array_replace($a1,$a2);
////array_replace() 函数使用后面数组元素相同 key 的值替换 array1 数组的值。
////如果一个键存在于第一个数组同时也存在于第二个数组，它的值将被第二个数组中的值替换。
////如果一个键存在于第二个数组，但是不存在于第一个数组，则会在第一个数组中创建这个元素。
////如果一个键仅存在于第一个数组，它将保持不变。如果传递了多个替换数组，它们将被按顺序依次处理，后面的数组将覆盖之前的值。
//var_dump($a1);
//var_dump($a2);


//demo test
//var_dump($a3);


//$a = [];
////list set 数据结构 都是用树组实现的
//
////队列 先进先出
//array_push($a, '1');     //$a[0]
//array_push($a, 2);       //$a[2]
//array_push($a, 3.00);    //$a[3]
//array_shift($a); // 将数组开头的单元移出数组
////array_unshift($a); // 将数组开头数组
//var_dump($a);
////栈 后进先出
//array_push($a, '1');
//array_push($a, 2);
//array_push($a, 3.00);
//array_pop($a);//弹出数组最后一个单元（出栈）
//var_dump($a);
//aa
//asdasd
