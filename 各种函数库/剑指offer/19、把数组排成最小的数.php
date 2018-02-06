<?php
/*
输入一个正整数数组，把数组里所有数字拼接起来排成一个数，打印能拼接出的所有数字中最小的一个。例如输入数组{3，32，321}，则打印出这三个数字能排成的最小数字为321323
 */
//思想：先对数组进行排序，遍历数组，分别进行左连接和右连接比较。
function PrintMinNumber($numbers)
{
    sort($numbers);//将数组进行排序
    $m = '';
    foreach($numbers as $v)
    {
        $str = (String)$v;//强制变换数据类型
        if($m.$str >= $str.$m)//左连接右连接大小比较
            $m = $str.$m;
        else
            $m = $m.$str;
    }
    return $m;
}