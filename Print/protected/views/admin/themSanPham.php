<div class="titleAdmin"> QUẢN LÝ SẢN PHẨM</div>
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
	<label for="Sanpham_parent">Chọn thể loại</label>
	<select	name="Sanpham[parent]" id="Sanpham_parent">
	<option value="0">--Chọn thể loại--</option>	
		<?php foreach ($theloais as $theloai) { ?>
			<option value="<?php echo $theloai->id;?>"><?php echo $theloai->name;?></option>		
		<?php }?>
	</select>
</div>
<div class="row loaisp"></div>
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
<div class="row">
	<label for="Sanpham_parent">Nội dung</label>
	<textarea id="input" name="Sanpham[noidung]"></textarea>
</div>
<div class="row buttons">
		<?php echo CHtml::submitButton('Thêm'); ?>
	</div>

<?php $this->endWidget();?>
<script type="text/javascript">
   $("#input").cleditor();
</script>