<?php
/**
 * 斐波那契数列 1,1,2,3,5,8,
 * @param  [type] &$n [description]
 * @return [type]     [description]
 */
function f($n)
{
	if($n == 1 || $n == 2)
		return $n;
	else
		return f($n-1) + f($n-2);
}
var_dump(f(3));
var_dump(f(4));
var_dump(f(5));
var_dump(f(6));
var_dump(f(7));