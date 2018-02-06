<?php
/*
一只青蛙一次可以跳上1级台阶，也可以跳上2级。求该青蛙跳上一个n级的台阶总共有多少种跳法。
根据题意求出公式f(n) = f(n-1) + f(n+1)
 */
//方法一：使用递归方式解决
function jumpFloor($number)
{
    if($number < 0)
        return 0;
    elseif($number == 1 || $number == 0)
        return 1;
    else
        return jumpFloor($number-1)+jumpFloor($number-2);
}

//方法二：借助数组使用迭代法
function jumpFloor($number)
{
    if($number < 0)
        return 0;
    elseif($number == 1 || $number == 0)
        return 1;
    else
    {
    	$arr = array();
        $arr[0] = 1;
        $arr[1] = 1;
        for($i=2; $i<=$number; $i++)
            $arr[$i] = $arr[$i-1] + $arr[$i-2];
        return $arr[$number];
    }
}


