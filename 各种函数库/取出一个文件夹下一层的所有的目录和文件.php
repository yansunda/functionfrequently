<?php
//知识点:dir函数，opendir,readdir
$dir = './test1';
function doqc($dir)
{
	$handle = opendir($dir);//取出目录的句柄
	while(false !== ($file = readdir($handle)))
		echo $file;
}
doqc($dir);