<?php
/*
在一个字符串(1<=字符串长度<=10000，全部由字母组成)中找到第一个只出现一次的字符,并返回它的位置。
思想：循环这个字符串
 */
function FirstNotRepeatingChar($str)
{
    if($str == '')
        return -1;
    $count = strlen($str);
    $str1 = $str;
    for($i=0; $i<$count; $i++)
    {
        $count1 = 0;
        for($j=0; $j<$count; $j++)
        {
            if($str[$i] == $str1[$j])
                $count1++;
            if($count1 > 1)
                continue;
        }
        if($count1 == 1)
            return $i;
    }
}