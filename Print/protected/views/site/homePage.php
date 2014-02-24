<?php 
$pas = Sanpham::model()->findAll(array("condition" => "type = '1'"));
foreach($pas as $pa){ ?>
<div class="box-service">
	<h2><a href="<?php echo $pa->id;?>"><?php echo $pa->name;?></a></h2>
	<div class="pd-box">
		<a href="<?php echo $pa->id;?>" ><img style="max-width: 280px;max-height: 200px;margin-bottom: 26px;" src="<?php echo Yii::app()->request->baseUrl."/files/images/".$pa->image; ?>"/></a>
		<p class="content"><?php echo $pa->noidung; ?></p>
	</div>
	<ul class="list-service">	
	<?php $chs = Sanpham::model()->findAll(array("condition" => "parent = '$pa->id'"));
		foreach($chs as $ch){ ?>
			<li><a href="<?php echo $pa->id;?>"><?php echo $pa->name;?></a></li>				
		<?php }?>	
	</ul>
</div>
<?php }?>