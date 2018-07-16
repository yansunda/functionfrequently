<?php
array_slice($array, $offset[, int $length = NULL [, bool $preserve_keys = false ]] ))
作用：从数组中截取一段数组。
参数说明：
$array：要截取的数组。
$offset : 偏移量。
$length : 如果给出了 length 并且为正，则序列中将具有这么多的单元。如果给出了 length 并且为负，则序列将终止在距离数组末端这么远的地方。如果省略，则序列将从 offset 开始一直到 array 的末端
$preserve_keys :  array_slice() 默认会重新排序并重置数组的数字索引。你可以通过将 preserve_keys 设为 TRUE 来改变此行为。
如：
$a = ['name' => 'tom', 'age' => 25, 'first_name' => 'zhang', 'sex' => 'man'];

$b = array_slice($a, 0);
//var_dump($b);//输出就是a数组

$b = array_slice($a, 1, 1);
//var_dump($b); //['age' => '25']

$b = array_slice($a, 1, -1);
//var_dump($b);//输出[age' => 25, 'first_name' => 'zhang']

$b = array_slice($a, -2, 1);
//var_dump($b);//$a数组中的倒数第二个元素

$c = ['nihao', 'yan', 'sun', 'da'];
$tmp = array_slice($c, 1, -1);
//var_dump($tmp);//输出['yan', 'sun'];

$tmp = array_slice($c,1,-1,true);
var_dump($tmp);//输出[1=>'yan', 2=>'sun']