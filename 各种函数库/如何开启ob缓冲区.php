开启ob缓冲区，把要输出的界面放到缓冲区中，然后生成新界面，下次读取这个界面即可。
<?php
/*判断有没有缓存文件*/
$p = I('get.p');//接收当前是第几页的
$cf = './Cache/index'.$p.'.html';//首页的缓存文件
if(file_exists($cf) && time()-filemtime($cf)<300)//判断有这个缓存文件，如果有判断有无过期
{
    include($cf);//包含并输出
}
else
{
	$this->assign('data',$data);
    $this->assign('x',$x);
    $this->assign('a',$a);
    $this->assign('five_note',$five_note);//把猜你喜欢数据传入页面
    $this->assign('btn',$show);
    ob_start();//开启ob缓冲区
    //$this->display();
    $this->display();
    $data = ob_get_contents();//得到缓冲区中的数据
    file_put_contents($cf, $data);//将数据写入缓存文件中区
}
//注意有时候要局部不缓存，那么我们就要用到jQuery事件通过ajax技术来实现这个功能。