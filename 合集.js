//判断高度添加滚动!
$(document).ready(function () {
	var doc_he = $("body").height();
    var doc_jian = doc_he - 220;
    var dai_h = $(".dai_h");
    if (doc_he < 715) {
    		dai_h.css("height", doc_jian + "px")
        dai_h.css("overflow-y", "scroll")
        }
   	});


//除本元素外的兄弟元素!	siblings()
$(function(){					
	$(".select > p").click(function(e){
		var sr = $(this).parent().parent().parent().siblings().find(".select > p").parent();
		$(this).parent().addClass('open');
		sr.removeClass("open");
		e.stopPropagation();
});	
