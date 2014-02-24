<?php /* @var $this Controller */ ?>
<script type="text/javascript">
var baseUrl = "<?php echo Yii::app()->request->baseUrl; ?>";
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" dir="ltr">
<head>
<meta name="language" content="en" />

<title>Yen Linh Print</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/favicon.ico" />
<meta content="CỬA HÀNG DỊCH VỤ YẾN LINH" name="GENERATOR" />
<meta content="3cdotcom.vn" name="author" />
<meta content="text/javascript" http-equiv="Content-Script-Type" />
<meta name="robots" content="INDEX, FOLLOW" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jqueryslidemenu.css" rel="stylesheet" type="text/css" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js" type="text/javascript"></script>
<script	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js" type="text/javascript"></script>
<script	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqueryslidemenu.js"	type="text/javascript"></script>
<script	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script	src="<?php echo Yii::app()->request->baseUrl; ?>/js/All.js"	type="text/javascript"></script>
<script	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.pack.js"	type="text/javascript"></script>
<script type="text/javascript">$(window).load(function() { $('#slider').nivoSlider();});</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/clEditor/jquery.cleditor.css" />    
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/clEditor/jquery.cleditor.min.js"></script>
<meta name="description"
	content="Cung cấp các giải pháp liên quan đến In ấn, máy gia công, máy văn phòng." />
<meta name="keywords" content="In ấn, in màu A0 - A4, Máy cán màng mini" />
<meta name="title" content="Yen Linh Print" />
</head>
<body>
<?php
$banner = Sanpham::model()->find(array("condition" => "type = '4'"));
if($banner!= null){
	$bn = $banner->image;
}
?>
	<div class="container">
		<div class="col-header">
			<img style="max-height: 124px;"
				src="<?php echo Yii::app()->request->baseUrl."/files/images/".$bn; ?>" border="0">
		</div>
		<div id="menu_global">
			<div class="jqueryslidemenu" id="myslidemenu">
				<ul>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>">Trang chủ</a></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>">Sản phẩm -
							dịch vụ</a>
						<ul class="dataTopMenu">
						<?php 
						$pas = Sanpham::model()->findAll(array("condition" => "type = '1'"));
						foreach($pas as $pa){
							$chs = Sanpham::model()->findAll(array("condition" => "parent = '$pa->id'"));
						?>
						<li>
							<a href="<?php echo Yii::app()->request->baseUrl."/site/theloai?i=".$pa->id."&_".$pa->name;?>"><?php echo $pa->name;?></a>
								<ul>
								<?php 
								foreach($chs as $ch){?>
									<li><a href="<?php echo Yii::app()->request->baseUrl."/site/sp?i=".$ch->id."&_".$ch->name;?>"><?php echo $ch->name;?></a></li>
								<?php }?></ul>
						<?php }?>						
						</ul>
						</li>
					<li><a
						href="<?php echo Yii::app()->request->baseUrl; ?>/site/gioithieu">Giới
							thiệu</a></li>
					<li><a
						href="<?php echo Yii::app()->request->baseUrl; ?>/site/lienhe">Liên
							hệ</a></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript"> function SubmitSearch(){var txtkey = $("#keyword").val(); setTimeout('location.href="/Search/'+locdau(txtkey) +'/";', 100);} $('#keyword').keypress(function(e) {if(e.which ==13) $('#btnSearch').click();});</script>

		<div class="col-slide">
			<div class="txt-png"></div>
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
				<?php
					$bqcTops = Sanpham::model()->findAll(array("condition" => "type = '4' OR type = '7'"));
					if($bqcTops != null){
						foreach($bqcTops as $bqcTop){
					
				?>
					<img class="active" alt="6"
						src="<?php echo Yii::app()->request->baseUrl."/files/images/".$bqcTop->image; ?>" style="max-width:948px; max-height:240px"/>
				<?php
				}
				}
				?>
				</div>
			</div>
		</div>
		<div class="dobong"></div>

		<div class="col-body">
			<div class="col-body">
				<div class="col-left">

					<div class="box-news-id">
						<h2>Sản phẩm - dịch vụ</h2>

						<ul class="menuleft">
							<?php foreach($pas as $pa){?>
							<li><a href="<?php echo Yii::app()->request->baseUrl."/site/theloai?i=".$pa->id."&_".$pa->name;?>"><?php echo $pa->name;?></a></li>
							<?php }?>
						</ul>
					</div>


					<div class="box-news-id">
						<h2>In ấn - Photo nổi bật</h2>
						<marquee height="360" onmouseout="this.start()"
							onmouseover="this.stop()" direction="up" scrolldelay="28"
							scrollamount="4" style="margin: 20px 0 20px 0;">
							<ul class="photoHot">

								<li><a href="15.htm"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/in lazer mau.jpg"
										alt="In lazer màu"></a>
									<h1>
										<a href="15.htm"
											lazer màu</a>
									</h1></li>

								<li><a href="27.htm"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/Can mang moi.jpg"
										alt="Máy cán màng mini 1.600.000đ"></a>
									<h1>
										<a href="27.htm">Máy
											cán màng mini 1.600.000đ</a>
									</h1></li>

								<li><a href="22.htm"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/name card.jpg"
										alt="In name card"></a>
									<h1>
										<a href="22.htm">In name
											card</a>
									</h1></li>

								<li><a href="18.htm"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/ma chu vang bac dong so sach.jpg"
										alt="MẠ CHỮ VÀNG A4 - A3"></a>
									<h1>
										<a href="18.htm">MẠ
											CHỮ VÀNG A4 - A3</a>
									</h1></li>

								<li><a href="13-1.htm"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/pho to kho A0-A4.jpg"
										alt="Photocoppy"></a>
									<h1>
										<a href="13-1.htm">Photocoppy2</a>
									</h1></li>

								<li><a href="10.htm"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/chinh sua luan van luan an.jpg"
										alt="Đóng quyển A0-A4"></a>
									<h1>
										<a href="10.htm">Đóng
											quyển A0-A4</a>
									</h1></li>

								<li><a href="19-1.htm"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/in offset.jpg"
										alt="In ofset"></a>
									<h1>
										<a href="19-1.htm">In ofset</a>
									</h1></li>
							</ul>
						</marquee>
					</div>

					<div class="box-news-id">
						<h2>Hỗ trợ trực tuyến</h2>
						<div class="fix">
							<ul class="support">
								<li class="ts">Địa chỉ: Nguyễn Tuân - Thanh Xuân - Hà Nội</li>
								<li class="bl">Kỹ thuật đặt hàng</li>
								<li class="phone">0915xxxyyy</li>
								<li class="bl">Hotline</li>
								<li class="phone">0915xxx.yyy</li>
								<li class="ol"><a href="ymsgr:sendim?hoangbieu_kma106"><img
										src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/online-u=hoangbieu_kma106&m=g&t=1&l=vn.gif">Dịch vụ in Yến Linh</a></li>

							</ul>
						</div>
					</div>

					<div class="c-adversting"></div>
				</div>

				<div class="col-right">
			<?php echo $content; ?>
				</div>
			</div>
		</div>

		<div class="box-bottom">
			<div class="fl-sodo">
				<img width="250" alt="Bản đồ"
					height="247"
					src="<?php echo Yii::app()->request->baseUrl; ?>/images/data/">
			</div>
			<ul class="box-news-bot">

			</ul>
		</div>
	</div>
	<div class="warr-foot">
		<div class="c-footer-c">
			<div class="menu-footer">
				<a href="<?php echo Yii::app()->request->baseUrl; ?>">Trang chủ</a>
				| <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/lienhe">Liên hệ</a> |
			</div>
			<div class="footer">
				<div style="text-align: center;">
					<div style="text-align: center;">
						<span style="font-size: 20px;"><strong>CỬA HÀNG DỊCH VỤ YẾN LINH</strong></span><br />
						<span style="font-size: 14px;"><strong>Trụ
								sở: Nguyễn tuân - Thanh Xuân - Hà Nội</strong><br />
							Tel: 09xxx yyy</span><br /> <strong>Email:</strong>
						inYenLinh@gmail.com - info@inYenLinh.com<br /> <span
							style="font-size: 14px;">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="divAdLeft"
		style="display: none; position: absolute; top: 10px; left: 0px;">
		<script language="JavaScript" type="text/javascript">ShowRightAdDiv();</script>
	</div>
	<div id="divAdRight"
		style="display: none; position: absolute; top: 10px; left: 0px;">
		<script language="JavaScript" type="text/javascript">ShowLeftAdDiv();</script>
	</div>
	<script language="javascript" type="text/javascript">document.write("<script type='text/javascript' language='javascript'>MainContentW = 958;LeftBannerW = 150;RightBannerW = 150;LeftAdjust = 0;RightAdjust = 0;TopAdjust = 0;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");</script>
</body>
</html>
<script type="text/javascript">

	$.ajax({
		type : "POST",
		url : baseUrl + "/site/datatemplate",
		data : {
		},
		dataType : "json",
		success : function(data) {
			var dataTopmenuHtml = "";
			$.each(data, function () {
				dataTopmenuHtml = dataTopmenuHtml +'<li><a href="'+this.id+'">'+this.name+'</a><ul>';
				if(this.ch.length > 0){
					$.each(this.ch, function () {
						dataTopmenuHtml = dataTopmenuHtml +'<li><a href="'+this.id+'">'+this.name+'</a></li>';
					});
				}
				dataTopmenuHtml = dataTopmenuHtml +'</ul></li>';
	        });
			// $(".dataTopmenu").append(dataTopmenuHtml);
		}
	});

</script>



