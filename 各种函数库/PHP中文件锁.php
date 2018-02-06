<?php
function suo()
{
	$path = './count';
	$handle = fopen($path,'r+');
	//设置排他锁
	flock($handle,LOCK_EX);
	//读取文件内容
	$count = fgets($handle);
	$count++;
	rewind($handle);
	fwrite($handle,$count);
	//解除锁机制
	flock($handle,LOCK_UN);
	fclose($handle);
}
suo();