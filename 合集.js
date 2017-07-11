//判断弹窗高度添加滚动、元素屏幕居中、全选、反选、长度限制并截取添加省略号、显示还可输入的剩余字符数、外链新窗口打开、删除内联样式、获取页面路径相关参数、、、、、、、、、、、








//判断弹窗高度添加滚动!
$(document).ready(function () {
	var doc_he = $("body").height();
	var doc_jian = doc_he - 220;
	var dai_h = $(".dai_h");
	if (doc_he < 715) {
		dai_h.css("height", doc_jian + "px")
		dai_h.css("overflow-y", "scroll")
	};
});

//元素屏幕居中
jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top",($(window).height()-this.height())/2+$(window).scrollTop()+"px");
    this.css("left",($(window).width()-this.width())/2+$(window).scrollLeft()+"px");
    return this;
}
$("#myDiv").center();

//全选
$("#checkall").click(function() {
   //固有属性使用prop，切记 
   $("#myForm input:checkbox").prop("checked",true);
});
//反选
$("#inverse").click(function() {
    $("#myForm input:checkbox").each(function () {
        $(this).prop("checked",!$(this).prop("checked"))
    })
});

//长度限制并截取添加省略号
var $elem = $("#title");
if($elem.text().length > 30) {
    $elem.text($elem.text().substr(0, 27)+"...");
}

//显示还可输入的剩余字符数
//第一个参数：总字符数
//第二个参数：还可输入多少显示区对象
$.fn.limiter = function (limit, elem) {
    $(this).on("keyup focus", function () {
        setCount(this, elem);
    });
    function setCount(src, elem) {
        var chars = src.value.length;
        if (chars > limit) {
            src.value = src.value.substr(0, limit);
            chars = limit;
        }
        elem.html(limit - chars);
    }
    setCount($(this)[0], elem);
}
//参数#title,3,#limit
$("#title").limiter(3,$("#limit"));

//外链新窗口打开
$("a[@href^='http']").attr('target','_blank');

//除本元素外的兄弟元素!	siblings()
$(".select > p").click(function(e){
	var sr = $(this).parent().parent().parent().siblings().find(".select > p").parent();
	$(this).parent().addClass('open');
	sr.removeClass("open");
	e.stopPropagation();
});	

//删除内联样式
$("*[style]").attr("style", "");

//获取页面路径相关参数
//值：http://42du.cn/list#jq
var url = document.URL;
//值：http:
var protocol = location.protocol;
//值：42du.cn
var host = location.host;
//值：jq
var hashP = document.URL.split('#')[1];