<?php
//判断php的运行模式
echo php_sapi_name();//只有在以Apache模块运行下才有效



function validate($user_name, $password) 
{
	$arr = ['user_name' => 'ifind', 'password' => 'ifind'];
	if (($user_name == $arr['user_name']) && ($password == $arr['password'])) {
		echo '验证通过'."</br>";
		echo "用户名:{$user_name}"."密码：{$password}";
		return true;
	} else {
		echo "需要用户名密码才可以访问";
		return false;
	}
}

if (!validate(@$_SERVER['PHP_AUTH_USER'], @$_SERVER['PHP_AUTH_PW']))
{
	http_response_code(401);
	//显示用户名密码对话框
	header('WWW-Authenticate:Basic realm="My website"');
	exit();
} else {

}