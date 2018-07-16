<?php
//应用一：什么是表达式？
简单却最精确的定义一个表达式的方式就是“任何有值的东西”
//应用二：查看某个表达式的值和类型
var_dump($a);
//应用三：得到一个容易读懂的类型的表单方式用于调试
gettype($a);
//应用五：检测某个类型
is_type(); 如：is_int()、is_string、is_array、is_null、is_object
//强制转换和设置变量类型
强制装换、settype(mixed &$var, string $type)