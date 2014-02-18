<div class="titleAdmin"> QUẢN LÝ NHÓM SẢN PHẨM</div>
<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'upload-form',
		'enableAjaxValidation' => false,
		'htmlOptions' => array (
				'enctype' => 'multipart/form-data' 
		) 
) );
?>
<div class="row">
	<label for="Sanpham_parent">Mục cha</label> <select
		name="Sanpham[parent]" id="Sanpham_parent" onchange="changeTheloai()">
		<?php foreach ($pa as $p) {?>
			<option value="<?php echo $p->id;?>"><?php echo $p->name;?></option>
		<?php }?>
	</select>
</div>
<div class="row">
	<label for="Sanpham_parent">Mục cha</label> <select
		name="Sanpham[nhomsanpham]" id="SanphamNhom" onchange="changeTheloai()">
		<?php foreach ($listC as $list) {?>
			<option value="<?php echo $p->id;?>"><?php echo $p->name;?></option>
		<?php }?>
	</select>
</div>
<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model, 'image');?>
		<?php echo $form->error($model,'image'); ?>
	</div>


<div class="row buttons">
		<?php echo CHtml::submitButton('Thêm'); ?>
	</div>

<?php $this->endWidget();?>
<script type="text/javascript">
function changeTheloai(t){
	var x = $("#Sanpham_parent option:selected" ).val();
	
	var t = "<?php print_r($listC);?>";
	console.log(t);
}
</script>