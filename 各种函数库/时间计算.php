<?php
//microtime(true); //1970年到现在的秒数，可以计算时间
function time_calculate($addtime)
{
	date_default_timezone_set('PRC');//设置时间区
	$now1 = date('Y-m-d H:i:s');//把当前时间以字符串形式表现出来
	$d =  abs(strtotime($now1) - strtotime($addtime))/60/60/24;//计算两者的差距（天）,
	if($d > 5)
	{
		$d = substr($addtime, 0,10);
	}
	else if($d > 1)
	{

		$d = (int)$d."天前";
	}
	else if($d < 1)
	{
		$d = $d*24;
		if($d > 1)
		{
			$d = (int)$d."小时前";
		}
		else
		{
			$d = $d * 60;
			$d = (int)$d."分钟前";
		}
	}
	return $d;
}