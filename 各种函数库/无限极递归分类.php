<?php

//自下而上找到顶级分类,条件  pid == id
function cat_shang($arr,$pid,$x = array())
{

	foreach($arr as $v)
	{
		if($v['id'] == $pid)
		{
			$x[] = $v;
			cat_shang($arr,$v['pid'],$x);
		}

	}
	return $x;
}

//自上而下找到子级分类,条件 id == pid
function cat_xia($arr,$id,$x = array())
{
	foreach($arr as $v)
	{
		if($id == $v['pid'])
		{
			$x[] = $v;
			cat_xia($arr,$id,$x);
		}
	}
	return $x;
}