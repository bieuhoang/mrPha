<div class="titleAdmin"> QUẢN LÝ LOẠI SẢN PHẨM</div>

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
	<label for="Sanpham_parent">Thể Loại</label> <select
		name="Sanpham[parent]" id="Sanpham_parent">
		<?php foreach ($pa as $p) {?>
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
		<?php echo CHtml::submitButton('CẬP NHÂT'); ?>
	</div>

<?php $this->endWidget();?>