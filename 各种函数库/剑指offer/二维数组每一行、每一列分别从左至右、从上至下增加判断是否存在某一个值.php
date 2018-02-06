<?php
/*题目描述
在一个二维数组中，每一行都按照从左到右递增的顺序排序，每一列都按照从上到下递增的顺序排序。请完成一个函数，输入这样的一个二维数组和一个整数，判断数组中是否含有该整数。
 */
//方法一：采用原生态遍历
function Find($target, $array)
{
    $heng = count($array);//横着的长度
    $shu = count($array[0]);//竖着的长度
    for($i=0; $i<$heng; $i++)
        for($j=$shu-1; $j>=0; $j--)//这里注意数组下标最大取值比数组长度小1
            if($array[$i][$j] == $target)
                return true; 
    return false;         	  
}
//方法二：采用foreach遍历二维数组
function Find($target, $array)
{
   foreach($array as $v)//$v此时为二维数组中的一维数组
       foreach($v as $v1)//$v1为一维数组$v的元素
           if($v1 == $target)
               return true;
    return false;
}
//总结：在PHP中使用foreach既可以完成对数组的遍历，但是其他的遍历方式可以增加自己的编程能力。