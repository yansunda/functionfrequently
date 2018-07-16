<?php
常量：define ('TEST', 'something');
静态变量：
static $a;
说明：static定义的变量不会被重新的初始化，其是保存在内存中。

例如①：
function testStatic() {
    static $val = 1;
    echo $val;
    $val++;
}
testStatic();   //output 1
testStatic();   //output 2
testStatic();   //output 3
例如②：
class Person {
    static $id = 0;
 
    function __construct() {
        self::$id++;
    }
 
    static function getId() {
        return self::$id;
    }
}
echo Person::$id;   //output 0
echo "<br/>";
 
$p1=new Person();
$p2=new Person();
$p3=new Person();
 
echo Person::$id;   //output 3

