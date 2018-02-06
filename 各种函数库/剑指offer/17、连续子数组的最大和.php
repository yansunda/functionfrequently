<?php
/*
HZ偶尔会拿些专业问题来忽悠那些非计算机专业的同学。今天测试组开完会后,他又发话了:在古老的一维模式识别中,常常需要计算连续子向量的最大和,当向量全为正数的时候,问题很好解决。但是,如果向量中包含负数,是否应该包含某个负数,并期望旁边的正数会弥补它呢？例如:{6,-3,-2,7,-15,1,2,2},连续子向量的最大和为8
(从第0个开始,到第3个为止)。你会不会被他忽悠住？(子向量的长度至少是1)
 */
function FindGreatestSumOfSubArray($array)
{
    $max = $array[0];//最大值初始化
    $length = count($array);
    for($i=0; $i<$length; $i++)//数组的起始位置
    {
        for($j=0; $j<$length-$i; $j++)//子数组长度
        {
            $sum = 0;//每次子数组和初始化
            $zi_length = $i + $j;
            for($f=$i; $f<=$zi_length; $f++)//求子数组的和
                $sum +=$array[$f];
            if($sum > $max)
                $max = $sum;
        }
    }
    return $max;
}