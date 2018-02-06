<?php
/*
求出1~13的整数中1出现的次数,并算出100~1300的整数中1出现的次数？为此他特别数了一下1~13中包含1的数字有1、10、11、12、13因此共出现6次,但是对于后面问题他就没辙了。ACMer希望你们帮帮他,并把问题更加普遍化,可以很快的求出任意非负整数区间中1出现的次数。
 */
function NumberOf1Between1AndN_Solution($n)
{
    $count=0;//1出现的计数器
    for($i=1; $i<=$n; $i++)//计算1~n中1出现的次数
    {
        $str = (string)$i;//强制转化整型为字符型
        $length = strlen($str);
        for($j=0; $j< $length; $j++)//统计字符‘1’出现的个数
            if($str[$j] == '1')
                $count++;
    }
    return $count;
}