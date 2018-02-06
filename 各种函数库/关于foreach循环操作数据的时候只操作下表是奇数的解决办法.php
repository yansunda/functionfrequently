<?php
foreach($data as $v)
	$x[] =  $v;
foreach($x as $v)
{
	......
}

本来要操作$data 的，下面只要操作$x 就行了。因为$x 把数据堵住了。详情可以看，xml笔记中的"删除陷阱";