<?php
/*
我们可以用2*1的小矩形横着或者竖着去覆盖更大的矩形。请问用n个2*1的小矩形无重叠地覆盖一个2*n的大矩形，总共有多少种方法？
根据n的长度可以知道f(1) = 1;f(2) = 2; f(n) = f(n-1) + f(n-2);
 */
//方法二：使用递归思想
function rectCover($number)
{
    if($number <= 0)
        return 0;
    elseif($number == 1)
        return 1;
  	elseif($number == 2)
        return 2;
    else
        return rectCover($number-1)+rectCover($number-2);
}
//方法一：使用数组迭代法
function rectCover($number)
{
    if($number <= 0)
        return 0;
    elseif($number == 1)
        return 1;
    elseif($number == 2)
        return 2;
    else
    {
    	$arr = array();
        $arr[1] = 1;
        $arr[2] = 2;
        for($i=3; $i<=$number; $i++)
            $arr[$i] = $arr[$i-1] + $arr[$i-2];
        return $arr[$number];
    }
}