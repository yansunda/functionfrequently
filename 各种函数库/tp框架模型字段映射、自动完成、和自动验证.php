<?php
namespace Model;
use Think\Model;
class UserModel extends Model
{
	// 字段映射定义,把表中中非法字段变为x_user表中合法字段
	protected $_map = array(
		'user_name' => 'username',
		'email' 	=> 'user_email',
		'password'	=> 'user_pwd',
		'password2'	=> 'user_pwd2',
		);
	/*自动完成*/
	protected $_auto = array(
		array('addtime','time',1,'function'),
		array('user_pwd','md5',1,'function'),
		);
	/*自动验证*/
	protected $_validate = array(
		array('user_email','email','email格式错误',1),
		array('user_pwd','user_pwd2','确认密码不正确',1,'confirm'), 
		array('user_name','','已经拥有该用户名',1,'unique'), 
		);

}