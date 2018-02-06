<?php
/*
输入一个整数数组，实现一个函数来调整该数组中数字的顺序，使得所有的奇数位于数组的前半部分，所有的偶数位于位于数组的后半部分，并保证奇数和奇数，偶数和偶数之间的相对位置不变。
 */
//判断一个函数是否是偶数.是偶数返回true，否则返回false
function is_ou($x)
{
    if($x%2 == 0)
        return true;
    else
        return false;
}
function reOrderArray($array)
{
    $arr = array();
    foreach($array as $k => $v)
        if(is_ou($v) == false)
        {
            $arr[] = $v;//把奇数赋值给新的数组
            unset($array[$k]);//去掉数组中为奇数的元素
        }
    $arr = array_merge($arr,$array);//合并两个数组
    return $arr;
}