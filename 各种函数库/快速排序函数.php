<?php
function swap(&$arr,$low,$height)
{
	$temp = $arr[$low];
	$arr[$low] = $arr[$height];
	$arr[$height] = $temp;
}
/**
 * [快速排序]
 * @param  [type] &$arr   [待排序数组]
 * @param  [type] $low    [第一个元素]
 * @param  [type] $height [数组长度]
 * @return [type]         [description]
 */
function kuai_pai(&$arr,$low,$height)
{
	$patten = $arr[$low];
	while($low < $height)
	{
		while($low < $height && $arr[$height] >= $patten)//从后往前遍历数组
			$height--;
		swap($arr,$low,$height);
		while($low < $height && $arr[$low] <= $patten)//从前往后遍历数组
			$low++;
		swap($arr,$low,$height);
	}
	return $low;
}
function digui(&$arr,$low,$height)
{
	if($low < $height)
	{
		$patten = kuai_pai($arr,$low,$height);
		digui($arr,$low,$patten-1);
		digui($arr,$patten+1,$height);
	}
}
$arr = array(1,5,7,2,34,67);
$low = 0;
$height = count($arr) - 1;
digui($arr,$low,$height);
var_dump($arr);