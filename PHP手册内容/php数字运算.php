<?php
//应用一：四舍五入
float rount (float $val[,int $precision=0[,int $model=PHP_ROUND_HALF_UP]])
//参数一：要处理的值。参数二：可选的十进制小数点后数字的数目。参数三：PHP_ROUND_HALF_UP、PHP_ROUND_HALF_DOWN PHP_ROUND_HALF_EVEN 或者 PHP_ROUND_HALF_ODD
//返回值：返回将val根据指定精度precision(十进制小数点后数字的数目)进行四合五入的结果。precision也可以是负数或零(默认值)
echo round(3.4);//3
echo round(4.5);//5
echo round(1.95583, 2);//1.96
echo round(1241757, -3);//1242000

PHP_ROUND_HALF_UP //遇到.5的情况时向上摄入number到precision小数位。舍入1.5到2，舍入-1.5到-2
PHP_ROUND_HALF_DOWN //遇到.5的情况时向下舍入number到precision小数位。舍入1.5到1，舍入-1.5到-1
PHP_ROUND_HALF_EVEN //遇到.5的情况时去下一个偶数值舍入number到precision小数位舍入9.5到10
PHP_ROUND_HALF_ODD //遇到.5的情况时去取下一个奇数值舍入number到precision小数位 8舍入8.5到9，舍入9.5到9

echo round(8.5, 0, PHP_ROUND_HALF_UP);   // 9
echo round(8.5, 0, PHP_ROUND_HALF_DOWN); // 8
echo round(8.5, 0, PHP_ROUND_HALF_EVEN); // 8
echo round(8.5, 0, PHP_ROUND_HALF_ODD);  // 9

//应用二：向上取整
ceil(float $value)

//应用三：向下取整
floor(float $value);

//应用四：以千位分隔符方式格式化一个数字
number_format(float $number, [,int $decimals=0])
number_format(float $number, int $decimals=0, string $dec_point=".", string $thousands_sep=",")
//本函数可以接受一个、两个、或者四个参数，但是不能是三个
//如果只提供一个参数，number的小数部分会被去掉，并且每个千位分隔符都是英文小写逗号“,”
//如果提供两个参数，number将保留小数点后的位数到你设定的值，其余同楼上
//如果提供了四个参数，number将保留decimal个长度的小数部分，小数点被替换为dec_point,千位分隔符替换为thousands_sep
//参数一：要格式化的数字 参数二：要保留的小数位数 参数三：指定千位分隔符显示的字符。
//返回值：格式化以后的number
$number = 1235658.45822;
$get = number_format($number);//1,235,658
$get = number_format($number, 3);//1,235,658.458
$get = number_format($number, 3, '..', '。');//1。235。658..458

//应用五：将数字格式化为货币字符串
money_format(string $format, float $number)//这个有点难，以后用到的时候用
//应用五：格式化字符串
sprintf(string $format, [,mixed $args [,mixed$...]])
//类型参照表
参数一 			     列子                 		结果
%%  -返回一个百分号%    sprintf("%%", 'hello')      		//%
%b  -二进制数           sprinf("%b", 'hello')    		//0      
			sprintf("%b", '1235658') 		//100101101101011001010 
			sprintf("%b", '1235658.45822') 		//100101101101011001010 ,其小数部分并没有算出来。
			decbin($number)//计算二进制数
%c  -ASCII值对应的字符 
%d  -包含正负号的十进制数（负数、0、正数） sprintf("%d", "-1235658.45822")   //-1235658小数点并没有被读取出来   
%u  -不包含正负号的十进制数（大于等于0）
%e  -使用小写的科学计数法 例如 1.2e+2
%E  -使用大写的科学计数法 例如 1.2E+2
%f  -浮点数（本地设置）
%F  -浮点数（非本地设置）
%s  -字符串
%x  -十六进制数（小写字母）
%X  -十六进制数（大写字母）
sprintf("%'07s", 'hello');  //按字符格式输出，输出结果占7位其余用0，补齐
sprintf("%'7.2f", '125.267'); //125.27
//应用六：进制间的互相转化
decbin($number) //十进制转化为二进制
decoct($number) //十进制转化为八进制
dechex($number) //十进制转化为十六进制
base_conver(string $number, int $frombase, int $tobase) //在任意进制之间转化数字
//返回值：返回一字符串，包含number以tobase进制表示。number本身的进制由frombase指定。frombase和tobase都只能在2和36之间，高于十进制的数字用字母a-z表示，例如a表示10，b表示11以及表示35
base_covert('A37334', 16, 2);

//应用七：类似于应用五   
//功能：返回格式化字符串
string vsprintf(string $fromat, array $args)
功能和sprintf() 函数类似，但是接收一个数组参数，而不是一系列可变数量的参数
vsprintf("%04u+%02u-%02u", explode('-', '1998-08-01')) //1998+08-01