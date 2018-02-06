<?php
//防止XSS攻击
function XSS_Remove($data)
{
	//引入这个类
	require_once('./././htmlPurifier/library/HTMLPurifier.auto.php');
		//创建一个默认的配置文件
		$_clean_xss_config = \HTMLPurifier_config::createDefault();
		//设置编码
		$_clean_xss_config->set('Core.Encoding','UTF-8');
		//设置允许出现的标签
		$_clean_xss_config->set('HTML.Allowed','table,tbody,tr,td,div,b,strong,i,em,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]');
		//设置允许出现的CSS
		$_clean_xss_config->set('CSS.AllowedProperties','font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align');
		//a标签上是否允许有_blank属性
		$_clean_xss_config->set('HTML.TargetBlank',TRUE);
		//生成过滤时使用的对象
		$_clean_xss_obj = new \HTMLPurifier($_clean_xss_config);
		//执行过滤
		return $_clean_xss_obj->purify($data);
}