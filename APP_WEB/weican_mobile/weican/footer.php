<form class="pad_info navbar-fixed-bottom" role="form" style="bottom:88px;" method="post" action="<?=$url?>/e/jituan/index.php?act=search" id="form_">
  <div class="row" style="padding-left:2px;">
    <div class="col-xs-10">
      <input type="text" class="form-control" placeholder="׿չ��Ѷ" name="keyboard" id="keyboard">
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
		alert("�������������ݣ�");
		
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
          <p >�߽�׿չ</p>
        </div>
        </a>
        <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/index.php?act=info">����׿չ</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/index.php?act=info_&id=43094">��Ӫ����</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/index.php?act=info_&id=43095">��ҵ�ֲ�</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-2 Pad_t_15">
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"  href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_03.png" height="28">
          <p>׿չ��Ѷ</p>
        </div>
        </a>
        <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/zixun.php?act=list&classid=5478">���ػ</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zixun.php?act=list&classid=5479">Ӫ���</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zixun.php?act=list&classid=5480">ý�屨��</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-2 Pad_t_15">
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_05.png" height="28">
          <p>Ʒ�ƺ���</p>
        </div>
        </a>
        <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/pinpai.php?act=info_">Ʒ������</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/pinpai.php?act=letterlist">����ĸ</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/pinpai.php?act=list">���ŵ�</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-2 Pad_t_15">
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"  href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_07.png" height="29">
          <p>��Ŀ�ɹ�</p>
        </div>
        </a>
        <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/zhaobiao.php?act=list">��Ŀ�б�</a></li>
          <li class="col"><a href="#l">�ɹ��б�</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-2 Pad_t_15">
      <div class="ff"><a href="<?=$url?>/e/jituan/shegong.php?act=list"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_09.png" height="28">
        <p>��ṫ��</p>
        </a></div>
    </div>
   <div class="col-xs-2 Pad_t_15">
      <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <div class="ff"><img src="<?=$url?>/e/data/jituan/images/group/nav_bottom_11.png" height="28">
          <p>�˲���Ƹ</p>
        </div>
        </a>
       <ul class="dropdown-menu" style="width:100%">
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5604">����</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5606">������</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5608">������</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5609">������</a></li>
          <li class="col"><a href="<?=$url?>/e/jituan/zhaopin.php?act=list&classid=5607">��������</a></li>

          
        </ul>
      </div>
    </div>
  </div>
</nav>


<script>
$(function(){
	
var _url = document.URL;
	
	if($('.info_tip p').html().indexOf('�߽�׿չ')>-1||$('.info_tip p').html().indexOf('��Ӫ����')>-1||$('.info_tip p').html().indexOf('��ҵ�ֲ�')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(1).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('׿չ��Ѷ')>-1||$('.info_tip p').html().indexOf('���ػ')>-1||$('.info_tip p').html().indexOf('Ӫ���')>-1||$('.info_tip p').html().indexOf('ý�屨��')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(2).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('Ʒ�ƺ���')>-1||$('.info_tip p').html().indexOf('Ʒ������')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(3).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('��Ŀ�ɹ�')>-1||$('.info_tip p').html().indexOf('��Ŀ�б�')>-1){
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(4).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('��ṫ��')>-1){
		
		
		$('.navbar-fixed-bottom').find('.col-xs-2').eq(5).addClass('col_red');	
	}
	else if($('.info_tip p').html().indexOf('�˲���Ƹ')>-1){
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