邮件相关协议：SMTP（25）：发送协议
 			  POP3:收取邮件协议
直接使用外网的邮箱服务（我们现在使用163的邮箱服务）
进入邮箱之后要设置相关的协议。
通过php功能包就可以发送邮件

必须配置了虚拟主机才可以。
使用以下函数就可以调用功能包发送邮件即可


注意：如果放回没有权限的话，有可能是账号密码写错了。
        如果数据没接收说明哪里可能打错了。

        用qq邮箱注册只发送成功了一次
        用网易邮箱可以成功


<?php 
function sendMail($to, $title, $content){
	require_once('./phpmailer/class.phpmailer.php');//导入phpmailer包
    $mail = new PHPMailer();
    // 设置为要发邮件
    $mail->IsSMTP();
    // 是否允许发送HTML代码做为邮件的内容
    $mail->IsHTML(TRUE);
    $mail->CharSet='UTF-8';
    // 是否需要身份验证
    $mail->SMTPAuth=TRUE;
    /*  邮件服务器上的账号是什么 -> 到163注册一个账号即可 */
    $mail->From="phpsever@163.com";
    $mail->FromName="phpsever";
    $mail->Host="smtp.163.com";//发送邮件的服务协议地址
    $mail->Username="phpsever";
    $mail->Password="18005773250yan";
    // 发邮件端口号默认25
    $mail->Port = 25;
    // 收件人
    $mail->AddAddress($to);
    // 邮件标题
    $mail->Subject=$title;
    // 邮件内容
    $mail->Body=$content;
    return($mail->Send());
}


我们在数据表里设计一个字段用来存储加密的验证码,判断对与错的代码是：
if(I('post.act') == 'regist')//发送邮件
{
    //生成校验码
    $code = md5(uniqid());//生成一个唯一的校验码信息
    //更新校验码到会员记录
    $where = array();
    $where = array(
        'user_check_code' => $code,
        );
    $this->where("id = {$data['id']}")->save($where);
    //调用发送邮件函数
    $link = "http://www.x_jd.com/Home/User/jihuo/id/" . $data['id'] . "/checkcode/" . $code;
    $is_su = sendMail($data['user_email'],'x_jd账号激活',"<a href =\"".$link ."\">"."点击激活".$link."</a>");
    if($is_su != true)
    {
        echo 'error';
        die;
    }
}
else
{
    $this->error('无权限访问');
}


//会员账号激活
public function jihuo()
{
    $id = I('get.id');
    $checkcode = I('get.checkcode');
    $model_user = D('User');
    $info = $model_user->field('user_check_code')->where("id = {$id}")->find();
    if($info['user_check_code'] == '1')
        $this->success('您已经激活了!',U('login'));
    else if($checkcode == $info['user_check_code'])
    {
        $where = array();
        $where = array('user_check_code' => '1',);
        $model_user->where("id = {$id}")->save($where);
        $this->success('激活成功',U('login'));
    }
    else
        $this->error('激活失败!',U('regist'));

}

