<?php
/**
 * [冒泡排序法]
 * [相邻的两个进行比较，小的数字往前面放大的数字往后面放]
 * @param  [type] $array 要排序的数组
 * @param [type] $[name] 排序的方式
 * @return [type] $array 排序后的数组
 */
$array = array(10,2,36,14,10,25,23,85,99,45);
function mao_pao($array,$method = 'asc')
{
	$count = count($array);//查看数组中元素个数
	for($i=0; $i<$count; $i++)//o<10
	{
		for($j=0; $j<$count-$i-1; $j++)//内部要多减一个1，否则数组会越界
		{
			if($array[$j] >= $array[$j+1])
			{
				$k = $array[$j];
				$array[$j] = $array[$j+1];
				$array[$j+1] = $k;
			}
		}
	}
	if($method == 'desc')
	{
		
		return array_reverse($array);//反转数组
	}
	else
		return $array;
}
var_dump(mao_pao($array));
