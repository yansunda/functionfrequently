<?php
/*
给定一个double类型的浮点数base和int类型的整数exponent。求base的exponent次方。
 */
//方法一：不用内置函数，根据指数是否大于0来分类。
function Power($base, $exponent)
{
    $value = 1;
    if($exponent < 0)
        $count = -1*$exponent;
    else
        $count = $exponent;
    for($i=0; $i<$count; $i++)
        $value *= $base;
    if($exponent < 0)
        $value = 1/$value;
    return $value;
}
//方法二：使用内置函数pow($base,$exponent)来计算
function Power($base, $exponent)
{
    return pow($base,$exponent);
}