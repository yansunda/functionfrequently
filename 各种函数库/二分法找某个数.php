<?php
//二分查找
function er_fen($arr,$low,$height,$val)
{
	if($low < $height)
	{
		$mid = (int)(($low + $height)/2);
		if($arr[$mid] == $val)
			echo $mid;
		else if($arr[$mid] < $val)
			er_fen($arr,$mid+1,$height,$val);
		else if($arr[$mid] > $val)
			er_fen($arr,$low,$mid-1,$val);
	}
	else
		echo 'not find.';
}
$arr = array(1,3,42,6,7,2,24,2);
er_fen($arr,0,7,56);
