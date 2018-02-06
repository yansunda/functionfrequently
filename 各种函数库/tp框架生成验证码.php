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