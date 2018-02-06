<?php
/**
 * [xuan_ze 选择排序]
 * @param  [type] &$arr   [description]
 * @param  [type] $length [数组的长度]
 * @return [type]         [description]
 */
function xuan_ze(&$arr,$length)
{
	//比较次数
	for($i=0; $i<$length; $i++)
	{
		for($j=$i; $j<$length; $j++)
		{
			if( $arr[$j] < $arr[$i])
			{
				$temp = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $temp;
			}
		}
	}
}
$arr = array(2,3,2,4,56,22,7);
$length = count($arr);
xuan_ze($arr,$length);
var_dump($arr);
