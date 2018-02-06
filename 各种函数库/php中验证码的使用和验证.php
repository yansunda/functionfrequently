<?php


    //显示验证码
    public function captcha()
    {
    	$config =    array(
	    'fontSize'    =>    15,    // 验证码字体大小
	    'length'      =>    4,     // 验证码位数
	    'useNoise'    =>    false, // 关闭验证码杂点
	    'imageH'	  =>	40,	
	    'imageW'	  =>	100,
	    'fontttf'	  =>	'4.ttf',
		);
    	$Verify = new \Think\Verify($config);
		$Verify->entry();
    }
    /*判断验证码正误*/
    public function check_captcha()
    {
    	//接收验证码
    	$code = I('post.captcha');
    	$x = $this->check_verify($code);
    	if($x == false)
    	{
    		echo json_encode(array(
    			'code' => 0,
    			));
    	}
    	else if($x == true)
    	{
    		echo json_encode(array(
    			'code' => 1,
    			));
    	}
    }
    // 检测输入的验证码是否正确
	function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
	}


    在模板中代码
    <li class="checkcode">
        <label for="">验证码：</label>
        <input id="captcha" maxlength="4" type="text"  name="checkcode" /><span></span>
        <img style="width: 84px; height: 32px;" onclick="this.src='captcha#' +Math.random();" src="<?php echo U('captcha');?>"  alt="" />
        <span>看不清？<a onclick="$('.checkcode img').attr('src','captcha#'+Math.random());" style="cursor: pointer;">换一张</a></span>
    </li>




    注意要导入jQuery的包
    


