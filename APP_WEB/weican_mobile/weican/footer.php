<form class="pad_info navbar-fixed-bottom" role="form" style="bottom:88px;" method="post" action="<?=$url?>/e/jituan/index.php?act=search" id="form_">
  <div class="row" style="padding-left:2px;">
    <div class="col-xs-10">
      <input type="text" class="form-control" placeholder="卓展资讯" name="keyboard" id="keyboard">
    </div>
    <div class="col-xs-2" style="text-align:center;padding-left:3px;">
    <input id="classid" type="hidden" name="classid" value="122">
<input type="hidden" name="show" value="title,brand_name,en_brand_name">
<input type="hidden" name="tbname" value="information">
      <button type="button" class="btn btn-default" onclick="tijiao()" style="width:100%"><i class="glyphicon glyphicon-search"></i></button>
    </div>
  </div>
</form>
<script>
function tijiao(){
	
	var keyword=$("#keyboard").val();
	if(keyword=='')
	{
		alert("请输入搜索内容！");
		
	}else{
		
		$("#form_").submit();
		
		}
	
	
	}
</script>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="row" >
    <div class="col-xs-2 Pad_t_15" >
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"  href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_13.png" height="28">
          <p >走进卓展</p>
        </div>
        </a>
        <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/index.php?act=info">关于卓展</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/index.php?act=info_&id=43094">经营理念</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/index.php?act=info_&id=43095">产业分布</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-2 Pad_t_15">
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"  href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_03.png" height="28">
          <p>卓展资讯</p>
        </div>
        </a>
        <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/zixun.php?act=list&classid=5478">公关活动</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zixun.php?act=list&classid=5479">营销活动</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zixun.php?act=list&classid=5480">媒体报道</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-2 Pad_t_15">
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_05.png" height="28">
          <p>品牌合作</p>
        </div>
        </a>
        <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/pinpai.php?act=info_">品牌招商</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/pinpai.php?act=letterlist">按字母</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/pinpai.php?act=list">按门店</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-2 Pad_t_15">
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"  href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_07.png" height="29">
          <p>项目采购</p>
        </div>
        </a>
        <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/zhaobiao.php?act=list">项目招标</a></li>
          <li class="col"><a href="#l">采购招标</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-2 Pad_t_15">
      <div class="ff"><a href="<?=$url?>/e/jituan/shegong.php?act=list"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_09.png" height="28">
        <p>社会公益</p>
        </a></div>
    </div>
   <div class="col-xs-2 Pad_t_15">
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_11.png" height="28">
          <p>人才招聘</p>
        </div>
        </a>
       <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5604">集团</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5606">北京店</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5608">沈阳店</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5609">长春店</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5607">哈尔滨店</a></li>

          
        </ul>
      </div>
    </div>
  </div>
</nav>


<script>
$(function(){
	
var _url = document.URL;
	
	if($('.info_tip p').html().indexOf('走进卓展')>-1||$('.info_tip p').html().indexOf('经营理念')>-1||$('.info_tip p').html().indexOf('产业分布')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(1).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('卓展资讯')>-1||$('.info_tip p').html().indexOf('公关活动')>-1||$('.info_tip p').html().indexOf('营销活动')>-1||$('.info_tip p').html().indexOf('媒体报道')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(2).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('品牌合作')>-1||$('.info_tip p').html().indexOf('品牌招商')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(3).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('项目采购')>-1||$('.info_tip p').html().indexOf('项目招标')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(4).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('社会公益')>-1){
		
		
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(5).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('人才招聘')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(6).addClass('col_red');	
	}
	
	$('.col-xs-2').click(function(){
		$(this).siblings().removeClass("col_red");
		$(this).addClass("col_red");
		
		
		})
	
})
</script>

</body>
</html>