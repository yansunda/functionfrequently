<?php
/**①
 * 青蛙跳级的种数，n个台阶一次可以跳一级或两级
 * 跳级的种数 = 后退一阶的种数 + 后退两阶的种数  
 * 那么fn = f(n-1) + f(n-2)
 * @param  [type] &$n [description]
 * @return [type]     [description]
 */
function f($n)
{
	if($n == 1)
		return 1;
	elseif($n == 2)
		return 2;
	elseif($n < 0)
		return -1;
	else
		return f($n-1) + f($n-2);
}
var_dump(f(3));
var_dump(f(4));



/**
 * 青蛙可以跳1~n级，求跳法
 */
//f(n) = f(n-1) + f(n-2) +...+ f(n-n);
//fn(n-1) = f(n-2) + f(n-3) +...+ f(n-n);
//所以f(n) = 2*f(n-1);
//f1=1
//f2=3
//f3=4
function f($n)
{
	if($n == 1)
		return 1;
	elseif($n == 2)
		return 2;
	else
		return 2*f($n-1);
}
var_dump(f(4));