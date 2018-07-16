<?php
类型运算符：用来确定一个PHP变量是否属于某一个类class的实例或者该某一个父类的子类的实例。
如：
class MyClass
{

}

class NotMyClass
{

}

$a = new MyClass();

var_dump($a instanceof MyClass);//true
var_dump($a instanceof NotMyClass);//false


class HelloClass extends MyClass
{

}

$b = new HelloClass();
var_dump($b instanceof MyClass);

此外：instanceof 也可以用于确定一个变量是不是实现了某个接口的对象的实例。

interface MyInterface
{

}

class MyClass implements MyInterface
{

}

$a = new MyClass();

var_dump($a instanceof MyClass);//true
var_dump($a instanceof MyInterface);//false