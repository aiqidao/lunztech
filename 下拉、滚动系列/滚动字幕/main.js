$(function(){
	$("input[type='text']").not(".no").each(function(){
		$(this).placeholder();
	});
	$(".tabs").each(function(){
		$(this).tabs();
	});
	resize();
	$(window).resize(function(event) {
		resize();
	});

	$(".in3_1 a").click(function(event) {
		$(".masker, .pt_abo1").show();
		return false;
	});
	$(".masker, .pt_abo1").click(function(event) {
		$(".masker, .pt_abo1").hide();
	});









});

/*main*/
//

/*call*/
//
function resize(){
	var ht=$(window).height();
	$(".flht").height(ht);
}
