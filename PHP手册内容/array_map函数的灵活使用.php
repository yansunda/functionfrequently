<?php
array_map(callback $callback, array $arr1 [, array $...])
//参数一：回调函数的函数名字。参数二~n：回调函数有几个参数那么就有几个数组。
//功能描述：是为array列表每个元素应用callback函数之后的数组。callback函数形参的数量传给array_map()数组的数量，两者必须一样。
//返回值：包含callback函数处理之后array1的所有元素.
//应用：说白了，有很多的foreach可以用array_map替换掉
//应用一：
function show_Spanish($n, $m)
{
    return("The number $n is called $m in Spanish");
}
$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");

$c = array_map("show_Spanish", $a, $b);
print_r($c);
//以上列子会输出
Array
(
    [0] => The number 1 is called uno in Spanish
    [1] => The number 2 is called dos in Spanish
    [2] => The number 3 is called tres in Spanish
    [3] => The number 4 is called cuatro in Spanish
    [4] => The number 5 is called cinco in Spanish
)

//应用二:此函数有个有趣的用法：传入 NULL 作为回调函数的名称，将创建多维数组（一个数组，内部包含数组。）
$a = array(1, 2, 3, 4, 5);
$b = array("one", "two", "three", "four", "five");
$c = array("uno", "dos", "tres", "cuatro", "cinco");

$d = array_map(null, $a, $b, $c);
print_r($d);
//以上列子输出
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => one
            [2] => uno
        )

    [1] => Array
        (
            [0] => 2
            [1] => two
            [2] => dos
        )

    [2] => Array
        (
            [0] => 3
            [1] => three
            [2] => tres
        )

    [3] => Array
        (
            [0] => 4
            [1] => four
            [2] => cuatro
        )

    [4] => Array
        (
            [0] => 5
            [1] => five
            [2] => cinco
        )

)