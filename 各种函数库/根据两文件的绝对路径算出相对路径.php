<?php
/*/qihoo/app/a/b/c/d/new.c",b="/qihoo/app/1/2/test.c
../../../../1/2/test.c*/

function suan_path($a="/qihoo/app/a/b/c/d/new.c",$b ="/qihoo/app/1/2/test.c" )
{
	$arra = explode('/',$a);
	$arrb = explode('/',$b);
	foreach($arrb as $k => $v)
	{
		if(in_array($v,$arra))
			unset($arrb[$k]);
	}
	$count = (int)(count($arra) - count($arrb) - 1);
	$path = str_repeat('../', $count) . implode('/',$arrb);
	return $path;
}
var_dump(suan_path());