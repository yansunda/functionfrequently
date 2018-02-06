<?php
/*
大家都知道斐波那契数列，现在要求输入一个整数n，
请你输出斐波那契数列的第n项。(n<=39)
f(n) = f(n-1) + f(n-1);
n==1  时 f(n) = 1;
n==2  时 f(n) = 2;
 */
//使用递归的方法
function Fibonacci($n)
{
	if($n > 39 || $n <= 0)
		return 0;
    if($n == 1 || $n == 2)
        return 1;
    else
    return Fibonacci($n-1)+Fibonacci($n-2);
}

//转化为数组，从头开始赋值
function Fibonacci($n)
{
    if($n > 39 || $n <=0)
        return 0;
    elseif($n == 1 || $n == 2)
        return 1;
    else
        {
        	$arr = array();
            $arr[1] = 1;
            $arr[2] = 1;
            for($i=3; $i<=$n; $i++)
                $arr[$i] = $arr[$i-1] + $arr[$i-2];
   	 	}
    return $arr[$n];
}