 $.ajax({
            type : "POST",
            url : "http://localhost/jd/index.php/Home/User/check_captcha",
            data : {"captcha":captcha},
            dataType : "json",
            success : function(data)
            {
              
            },
            error : function()
            {
                
            }   
          });