代码如下

<script type="text/javascript">
                $("#zone").click(function(e){
                var p = {
                    url:$(e.target).parents('td').prev().prev().children('input').val(),
                    showcount:'1',/*是否显示分享总数,显示：'1'，不显示：'0' */
                    desc:'very good！',/*默认分享理由(可选)*/
                    summary:'颜孙达博客又发表了文章了，大家快来围观啊！',/*分享摘要(可选)*/
                    title:$(e.target).parents('td').prev().prev().children('a').html(),/*分享标题(可选)*/
                    site:'yansd.xin',/*分享来源 如：腾讯网(可选)*/
                    pics:'__IMG__<%$info.img.0.url%>', /*分享图片的路径(可选)*/
                    style:'203',
                    width:98,
                    height:22
                };
                var s = [];
                for(var i in p){
                    s.push(i + '=' + encodeURIComponent(p[i]||''));
                }
                window.open("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+s.join('&'));
            });
</script>


