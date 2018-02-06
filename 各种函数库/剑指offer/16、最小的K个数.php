<?php
/*
输入n个整数，找出其中最小的K个数。例如输入4,5,1,6,2,7,3,8这8个数字，
则最小的4个数字是1,2,3,4,。
 */
//方法一：使用自定义函数遍历数组
function get_min(&$input)
{
    foreach($input as $k => $v)//取出第一个元素
    {
        $min = $input[$k];
        $search = $k;
        continue;
    }
    foreach($input as $k => $v)//找出最小的元素
        if($input[$k] < $min)
        {
            $min = $input[$k];
            $search = $k;
        }
    return $search;//返回最小元素下标
}
function GetLeastNumbers_Solution($input, $k)
{
    $count = count($input);
    if($count < $k)//不成立的情况
        return [];
    $arr = array();
    for($i=0; $i<$k; $i++)
    {
        $search = get_min($input);//返回最小数的下标
        $arr[] = $input[$search];
        unset($input[$search]);//去掉原数组最小元素
    }
    return $arr;
}

//方法二：使用PHP的内置函数min和array_search
function GetLeastNumbers_Solution($input, $k)
{
    $count = count($input);
    if($count < $k)//不成立的情况
        return [];
    $arr = array();
    for($i=0; $i<$k; $i++)
    {
        $min = min($input);//取得最小元素
        $search = array_search($min,$input);//返回最小数的下标
        $arr[] = $min;
        unset($input[$search]);//去掉原数组最小元素
    }
    return $arr;
}