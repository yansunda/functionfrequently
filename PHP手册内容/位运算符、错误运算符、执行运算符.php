<?php
错误运算符@。
单出错的时候其值为false
如：
$a = @include('././.b.php');
var_dump($a);//输出false
执行运算符：``
PHP 将反引号中的内容作为shell命令来执行，并将其输出信息返回。反引号运算符“`”的效果与shell_exec相同
例：
$a = `ls -al`;//注意：反引号在激活了安全模式或者关闭了shell_exec是无效的。
echo $a;