<?php
$arr = array(
	array('name' => 3,'value' => 3),
	array('name' => 1,'value' => 1),
	array('name' => 2,'value' => 2),
);
/**
 * 根据条件排序
 * @param  [type] $arr    [数组]
 * @param  [type] $yiju   [排序依据]
 * @param  string $method 升序降序
 * @return [type]         [description]
 */
function pai_xu($arr,$yiju,$method = 'asc')
{
	$arr1 = array();
	//根据排序依据拼成新数组
	foreach($arr as $v)
		$arr1[$v[$yiju]] = $v;
	if($method == 'asc')
		ksort($arr1);
	else
		krsort($arr1);
	var_dump($arr1);
}
pai_xu($arr,'name');