/**
 * ajax返回json数据，jQuery把ajax解析出来
 * 
 */
Object {attr_id: "1", attr_value: "f", attr_name: "网络制式", attr_is_sel: "0", attr_sel_opt: ""}
upd.html?id=30:162 Object {attr_id: "2", attr_value: "2", attr_name: "尺寸体积", attr_is_sel: "0", attr_sel_opt: ""}
upd.html?id=30:162 Object {attr_id: "3", attr_value: "12", attr_name: "内存", attr_is_sel: "0", attr_sel_opt: ""}
upd.html?id=30:162 Object {attr_id: "4", attr_value: "1", attr_name: "长度", attr_is_sel: "0", attr_sel_opt: ""}
upd.html?id=30:162 Object {attr_id: "5", attr_value: "1", attr_name: "宽度", attr_is_sel: "0", attr_sel_opt: ""}
upd.html?id=30:162 Object {attr_id: "8", attr_value: "1", attr_name: "容量", attr_is_sel: "0", attr_sel_opt: ""}
upd.html?id=30:162 Object {attr_id: "9", attr_name: "操作系统", attr_is_sel: "1", attr_sel_opt: "Android,ios,windows,塞班", attr_value: Array[3]}attr_id: "9"attr_is_sel: "1"attr_name: "操作系统"attr_sel_opt: "Android,ios,windows,塞班"attr_value: Array[3]__proto__: Object
upd.html?id=30:162 Object {attr_id: "10", attr_name: "颜色", attr_is_sel: "1", attr_sel_opt: "蓝色，绿色，白色，粉色", attr_value: Array[3]}
upd.html?id=30:162 Object {attr_id: "13", attr_value: "intel", attr_name: "处理器类型", attr_is_sel: "0", attr_sel_opt: ""}






   $(function(){
        $(".select").change(function(e){
            var type_id = $(e.target).val();
            var x = '';
            $.ajax({
                type : "GET",
                url : "http://localhost/jd/index.php/Back/Attr/select_attr?type_id=" + type_id,
                success : function(data)
                {
                    //接受一个json的字符串
                    var obj = jQuery.parseJSON(data);
                    //console.log(obj.message);
                    $.each(obj.message, function(index, val) 
                    {
                        x = x +  "<td>" +val.id+ "</td>";
                        x = x +  "<td>" +val.attr_name+ "</td>";
                        x = x +  "<td>" +val.type_id+ "</td>";
                        x = x +  "<td>" +val.attr_is_sel+ "</td>";
                        x = x +  "<td>" +val.attr_write_mod+ "</td>";
                        x = x +  "<td>" +val.attr_sel_opt+ "</td>";
                        x = '<tr>' + x + '</tr>';
                    });
                    $(".table_a tr:not(:first)").remove();
                    $(".table_a").append(x);
                },
                error : function()
                {
                    alert('error');
                }
            });
        });
    });
