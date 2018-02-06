<?php
/**
 * [a 用PHP实现双向队列]
 * [在队列的两头可以对队列数据进行增加和删除]
 * array_unshift() 在数组开头插入
 * array_shift() 在数组开头弹出
 * array_push() 在数组末尾插入
 * array_pop() 在数组末尾弹出
 * @return [type] [description]
 */
class sdl
{
	public function insert_first($array,$data)
	{
		array_unshift($array,$data);
		return $array;
	}
	public function del_first($array,$data)
	{
		array_shift($array);
		return $array;
	}
	public function insert_last($array,$data)
	{
		array_push($array,$data);
		return $array;
	}
	public function del_last($array,$data)
	{
		array_pop($array);
		return $array;
	}
}

