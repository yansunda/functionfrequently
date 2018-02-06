<?php
/*
题目：请实现一个函数，将一个字符串中的空格替换成“%20”。例如，当字符串为We Are Happy.则经过替换之后的字符串为We%20Are%20Happy。
 */
//方法一：使用字符按串数组
function replaceSpace($str)
{
    $k = null;
    $length = strlen($str);
    for($i=0; $i<$length; $i++)
    {
    	if($str[$i] != ' ')
            $k .= $str[$i]; 
        else
            $k .='%20';
    }
    return $k;
}

//方法二：使用PHP内置的函数，explode 和 implode操作数组
function replaceSpace($str)
{
    $arr = explode(' ',$str);
    $str = implode('%20',$arr);
    return $str;
}

//方法三：使用PHP中的str_replace($search,$replace,$str)来操作数组
function replaceSpace($str)
{
    return str_replace(' ','%20',$str);
}