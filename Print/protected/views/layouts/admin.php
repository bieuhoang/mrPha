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
<meta content="CÔNG TY CỔ PHẦN IN THANH XUYẾN" name="GENERATOR" />
<meta content="3cdotcom.vn" name="author" />
<meta content="text/javascript" http-equiv="Content-Script-Type" />
<meta name="robots" content="INDEX, FOLLOW" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"
	tppabs="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/jqueryslidemenu.css"
	tppabs="<?php echo Yii::app()->request->baseUrl; ?>/css/jqueryslidemenu.css"
	rel="stylesheet" type="text/css" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"
	tppabs="<?php echo Yii::app()->request->baseUrl; ?>/data/js/common.js"
	type="text/javascript"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"
	tppabs="<?php echo Yii::app()->request->baseUrl; ?>/data/js/jquery.min.js"
	type="text/javascript"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqueryslidemenu.js"
	tppabs="<?php echo Yii::app()->request->baseUrl; ?>/data/js/jqueryslidemenu.js"
	type="text/javascript"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"
	tppabs="<?php echo Yii::app()->request->baseUrl; ?>/data/js/jquery-1.7.2.min.js"
	type="text/javascript"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.pack.js"
	tppabs="<?php echo Yii::app()->request->baseUrl; ?>/data/js/jquery.nivo.slider.pack.js"
	type="text/javascript"></script>
<script type="text/javascript">$(window).load(function() { $('#slider').nivoSlider();});</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38844940-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<meta name="google-site-verification"
	content="pOsYHbGVQ1XjaJxDR1WwIvpfiaPBSuaQ0nBTtDxOPZc" />
<meta name="description"
	content="Cung cấp các giải pháp liên quan đến In ấn, máy gia công, máy văn phòng." />
<meta name="keywords" content="In ấn, in màu A0 - A4, Máy cán màng mini" />
<meta name="title" content="Thanh Xuyen Print" />
</head>
<body>
	<div class="container">
		<script type="text/javascript"> function SubmitSearch(){var txtkey = $("#keyword").val(); setTimeout('location.href="/Search/'+locdau(txtkey) +'/";', 100);} $('#keyword').keypress(function(e) {if(e.which ==13) $('#btnSearch').click();});</script>

		<div class="col-body">
				<div class="col-left">
				<a href="logout">Logout</a>
					<div class="box-news-id">
						<h2>Quản lý danh muc</h2>

						<ul class="menuleft">
							<li>+ LOẠI SẢN PHẨM</li>
							<li class="lch"><div><a class="ch">Thêm mới</a></div></li>
							<li class="lch"><div><a class="ch">Danh sách</a></div></li>
							<li>+ NHÓM SẢN PHẨM</li>
							<li class="lch"><div><a class="ch">Thêm mới</a></div></li>
							<li class="lch"><div><a class="ch">Danh sách</a></div></li>
							<li>+ SẢN PHẨM</li>
							<li class="lch"><div><a class="ch">Thêm mới</a></div></li>
							<li class="lch"><div><a class="ch">Danh sách</a></div></li>
							<li><a class="ch">+ LIÊN HỆ</a></li>
							<li class="lch"><div><a class="ch">BANNER</a></div></li>
							<li>+ QUẢNG CÁO TRÁI</li>
							<li class="lch"><div><a class="ch">Thêm mới</a></div></li>
							<li class="lch"><div><a class="ch">Danh sách</a></div></li>
							<li>+ QUẢNG CÁO PHẢI</li>
							<li class="lch"><div><a class="ch">Thêm mới</a></div></li>
							<li class="lch"><div><a class="ch">Danh sách</a></div></li>
						</ul>
					</div>					
				</div>

				<div class="col-right">
					<?php if(isset($this->breadcrumbs)):?>
				<?php
						
$this->widget ( 'zii.widgets.CBreadcrumbs', array (
								'links' => $this->breadcrumbs 
						) );
						?>
			<?php endif?>	
			<?php echo $content; ?>
				</div>
			</div>
	</div>
	<script language="javascript" type="text/javascript">document.write("<script type='text/javascript' language='javascript'>MainContentW = 958;LeftBannerW = 150;RightBannerW = 150;LeftAdjust = 0;RightAdjust = 0;TopAdjust = 0;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");</script>
</body>
</html>



