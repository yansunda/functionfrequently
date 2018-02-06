<?php
$dir = './test1';
/**
 * @param  $dir 要查找的目录
 * @return 空
 * 递归思想
 */
function doqc($dir)
{
	$handle = opendir($dir);//取出目录句柄
	//循环取出下一层文件
	while(($file=readdir($handle)) !== false)
	{
		if($file != '.' && $file != '..')
		{
			$dir = $dir . '/' . $file;
			echo $file;
			if(is_dir($dir))
			{
				doqc($dir);
			}
		}
	}

}
doqc($dir);