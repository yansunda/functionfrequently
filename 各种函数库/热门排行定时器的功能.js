function time_paihang()
{
	$.ajax({
			type : "POST",
			url : "/Home/Info/ajax_remen",
			dataType : "json",
			success : function(data)
			{
				if(data.code == 1)
				{
					var x = "<li id='li01'><a target='_blank' href=\""+'/index.php/Home/Comment/show_detailed?id=' + data.id + "\">" + data.title + "</a></li>";
					//去掉第一个子标签
					$(".paihang li:first-child").remove();
					//在子标签最后加入一个
					$(".paihang").append(x);
				}
			},
			error : function()
			{
				//alert('error');
			}
		});
}
$(function(){
	h = setInterval("time_paihang()",2000);
	$(".paihang").mouseover(function(e){
		clearInterval(h);
	});
	$(".paihang").mouseout(function(e){
		h = setInterval("time_paihang()",2000);
	});
})
