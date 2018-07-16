<?php
switch：
说明：swith语句类似于具有同一个表达式的一系列if语句。很多场合需要把同一个变量（或者表达式）与很多不同的值比较，并根据它等于哪个值来执行不同的代码。这正是witch的用具。

为避免错误，switch怎么执行非常重要。switch语句一行接一行的执行。开始时没有代码被执行。仅当一个case语句中的值和switch表达式的值匹配时PHP才开始执行语句。直到switch的程序段结束或者遇到第一个break语句为止。如果不在case的语句daunt最后加上break的话，PHP将继续执行下一个case中的语句段。一个case的特例是default。它匹配了任何和其他case都不匹配的情况。


$i = 11;

switch ($i) 
{
	case 0:
		$i=0;
		echo $i;
		break;
	case 1:
		echo '2';
		echo 1;
		break;
	default:
		echo 'not match';
		break;
}

说明：break结束当前for，foreach，while、do-while或者switch结构的执行。
此外：break可以接受一个可选的数字参数来决定跳出几重循环。
如：

$i = 0;
while (++$i) {
    switch ($i) {
    case 5:
        echo "At 5<br />\n";
        break 1;  /* 只退出 switch. */
    case 10:
        echo "At 10; quitting<br />\n";
        break 2;  /* 退出 switch 和 while 循环 */
    default:
        break;
    }
}