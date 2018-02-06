<?php
/*
输入一个整数，输出该数二进制表示中1的个数。其中负数用补码表示。
使用PHP内置函数decbin($x);
 */
function NumberOf1($n)
{
    $count = 0;
    $x = decbin($n);
    for($i=0; $i<strlen($x); $i++)
        if($x[$i] == '1')
            $count++;
    return $count;
}