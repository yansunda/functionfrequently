<?php
/*
输入一个矩阵，按照从外向里以顺时针的顺序依次打印出每一个数字，
例如，如果输入如下矩阵： 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 则依次打印出数字1,2,3,4,8,12,16,15,14,13,9,5,6,7,11,10.
 */
function printMatrix($matrix)
{
    //思想：按圈数循环,圈数为最小的宽高除2向上取整
    $height = count($matrix);//高度
    $width = count($matrix[0]);//宽度
    $left = 0;//左边的界限
    $top = 0;//上面的界限
    if($height < $width)//取出圈数
        $quan_shu = ceil($height/2);
    else
        $quan_shu = ceil($width/2);
    for($f=0; $f<$quan_shu; $f++)//循环圈数
    {
        $i = $j = $f;//初始输出时的下标
        while($j < $width)//自左往右遍历
        {
            echo $matrix[$i][$j];
            $j++;
        }
        $j--;//此时上面的while语句$j会多加1，因此要减1
        while(++$i < $height)//自上而下遍历
            echo $matrix[$i][$j];
        $i--;//此时上面的while语句$i会多加1，因此要减1
        if($quan_shu != 1)//当执行的圈数不为1的时候执行
        {
            if($f == 0)
                while(--$j >= $left)//自右向左遍历
                    echo $matrix[$i][$j];
            else
                while(--$j > $left)//自右向左遍历
                    echo $matrix[$i][$j];
            $j++;//此时上面的while语句$j会多减1，因此要加1
        }
        if($quan_shu != 1)//当执行的圈数不为1的时候执行
        {
            while(--$i > $top)//自下而上遍历
                echo $matrix[$i][$j];
            $i++;//此时上面的while语句$i会多加1，因此要减1
        }
        $width--;$height--;$left++;$top++;
        echo '</br>';
    }
}
