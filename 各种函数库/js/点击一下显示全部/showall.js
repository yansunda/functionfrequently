//页面在入的时候显示全部
$(document).ready(function(){
			//获取所有的类属性
			$(".showall").on("click",function(e){
				//获取当前点击a标签的id
				var id = $(e.target).attr('id'); 
				//alert(id);
			$.ajax({
				type : "POST",
				url :  "http://localhost/Xrk/index.php/Home/Index/show_note",
				data : {"id":id},
				dataType : "json",
				success : function(data)
				{
					if(data.code == 0)
					{
						alert(data.message);
					}
					else if(data.code == 1)
					{
						//alert($(e.target).html());
						if($(e.target).html() == '显示全部')
						{
							$(e.target).prev().prev("#1").css('display','none');
							$(e.target).prev("#2").css('display','block');
							$(e.target).prev("#2").html(data.message);
							$(e.target).html("收起");
						}
						else
						{
							$(e.target).prev().prev("#1").css('display','block');
							$(e.target).prev("#2").css('display','none');
							$(e.target).prev("#2").html('');
							$(e.target).html("显示全部");
						}
					}
				},
				error : function(data)
				{
					alert(0);
				}
			});
				});
	});