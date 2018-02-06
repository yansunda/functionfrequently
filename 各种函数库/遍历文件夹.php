<?php
/*//取出一个文件夹下一层所有的目录和文件
function xia_yi_c()
{
	$path = './';
	$handle = opendir($path);
	while($file = readdir($handle))
	{
		if($file != '.' && $file != '..')
			 var_dump($file);
	}
}
xia_yi_c();*/




//取出一个文件夹下面的所有文件和目录
function suo_you($path = '../test')
{
	$handle = opendir($path);
	$x = $path;
	while($file = readdir($handle))
		if($file != '.' && $file != '..')
		{
			//x的作用是同级目录拼path判断
			$path = $x . '/' . $file;
			var_dump($path); 
			if(is_dir($path))
				suo_you($path);
		}
}
suo_you();