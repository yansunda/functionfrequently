如果看了还有不懂得话。可以在  笔记/黑马程序员/tp京东商城中查看。

6.qq登录系统实现
qq互联--->创建应用---->获得appid/appkey---->qq登录功能文件包

开发qq登录功能
配置：qq/comm/config.php
      appid / appkey / callback / scope

          callback：回调地址 
http://www.hulanquan.cc/Plugin/qq/oauth/qq_callback.php
之后修改应用的回调地址

qq登录功能实现机制：
appid/appkey--------->access_token-------->openid(唯一标识一个qq账号信息)
通过openid去调用user/get_user_info.php接口，就可以获得qq信息
再把qq信息注册到系统里边









登录connect.qq.com QQ互联  ，
创建一个应用（借口）
自己网站的相关信息添加到应用中。
QQ互联网站会给我们分配秘钥相关的信息。
有了秘钥就可以使用QQ登录功能。





点击管理中心就可以看见创建应用了。

创建应用后会给你分配一个APP ID 和 APP KEY。生成秘钥信息。

qq登录功能实现。

下载使用开发
可以看到有一个Connect_PHP_SDK_for_OAuth2_V1.0文件
我们把文件拷贝到plug中
也可以查看README.txt.dump的提示。

在HTML页面中。或者也可以用click时间也可以，反正要打开网页就行。
<dd class="qq"><a href="javascript:open_qq();"><span></span>QQ</a></dd>

	<!-- 做qq登录 -->
	<script type="text/javascript">
		function open_qq()
		{
			window.open("/Application/Plug/qq/oauth/qq_login.php","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
		}
	</script>
	下面就是做配置。
	修改comm/config.php 文件中的
	$_SESSION["appid"] 

	$_SESSION["appkey"]

	$_SESSION["callback"] QQ登录成功后跳转的地址

	改为自己申请到的id
	$_SESSION["appid"] 、$_SESSION["appkey"]这两个值可以在自己申请的信息中找到。

	$_SESSION["callback"]
	这个值就在oauth/qq_callback.php 中
	写全路径即可。
	$_SESSION["callback"] = "http://www.x_jd.com/Application/Plug/qq/oauth/qq_callback.php"
	
	把QQ授权api接口.按需调用 的注释打开。
	代码中的回调函数弄好之后，在申请的信息中的回调函数更改成代码的回调函数
	
	到此config文件的修改完成。

	此时点击QQ标签就会有登录的页面。分成：当前你是否登录QQ
	


