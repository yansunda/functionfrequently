思路：先定义一个全局变量is_submit 开始为false 如果到了验证的最后一步的话用户填写的都对，那么为true。
在给表单顶一个提交事件，用e.preventDefault() 来阻止表单的跳转
$(function(){
    //表单是否可以提交
    is_submit = false;
    $("#captcha").keyup(function(e){
      var captcha = $(e.target).val();
      if(captcha.length == 4)
      {
          $.ajax({
            type : "POST",
            url : "http://localhost/jd/index.php/Home/User/check_captcha",
            data : {"captcha":captcha},
            dataType : "json",
            success : function(data)
            {
                if(data.code == 0)
                {
                    $(e.target).parent().prev().html("<span style='color:red;'>验证码错误</span>");
                    is_submit = false;
                }
                else if(data.code == 1)
                {
                    $(e.target).parent().prev().html("<span style='color:blue;'>验证码正确</span>");
                    is_submit = true;
                }
            },
            error : function()
            {
                alert('error');
            }   
          });
      }
    });
    $("form").submit(function(e){
        if(is_submit == false)
        {
            e.preventDefault();
        }
    });
})