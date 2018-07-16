<?php
数组运算符有“+、==、===、！=、！==”下面来一一介绍
“+”：把右边的数组元素附加到左边的数组后面。如果两个数组具有相同的键名，则只用左边数组中的，右边的别忽略。
如：
$a = ['name' => "jone", "age" => "24"];
$b = ['name1' => "jone", "age1" => "24"];
var_dump($a+$b);//结果就是数组a中元素和b中元素的集合体。
$a = ['jone', "24"];
$a = ['jone', "24"];
var_dump($a+$b);//结果是$a
array_merge(array1, array2...)//将多个数组合并起来。
注意：
关联数组：如果有相同的键名，那么前面的数组将被覆盖,其覆盖方向和数组运算符“+”相反。
索引数组：会附加到后面。
如：
$a = ['name' => "jone", "age" => "24"];
$b = ['name1' => "jone", "age1" => "24"];
$c = array_merge($a, $b);
var_dump($c);//结果就是数组a中元素和b中元素的集合体。
$a = ['name' => "jone", "age" => "24"];
$b = ['name' => "tom", "age" => "25"];
$c = array_merge($a, $b);
var_dump($c);//结果就是数组b。

$a = ["tome", "25"];
$b = ["jaker", "26"];
$c = array_merge($a, $b);
var_dump($c);//结果就是数组a中元素和b中元素的集合体。

$a = ["tome", "25", 'name' => 'jon'];
$b = ["jaker", "26", 'name' => 'jon1'];
$c = array_merge($a, $b);
var_dump($c);
//结果为
array (size=5)
  0 => string 'tome' (length=4)
  1 => string '25' (length=2)
  'name' => string 'jon1' (length=4)
  2 => string 'jaker' (length=5)
  3 => string '26' (length=2)

“==”：忽略键值顺序，如果两个数组有相同键值对，则视为true。
如：
$a = ['name' => 'tom', 'age' => 25];
$b = ['age' => 25, 'name' => 'tom'];

if ($a == $b) {
	echo 'right';
}

“!=”：忽略键值顺序，如果两个数组有不同的键值对，则视为true。
“===”：顺序和类型都相同，并且具有相同的键值对。那么为true。
如：
$a = ['name' => 'tom', 'age' => 25];
$b = ['age' => 25, 'name' => 'tom'];
var_dump($a === $b);//输出为false

“!==”