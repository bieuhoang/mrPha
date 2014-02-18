
<div class="titleAdmin"> QUẢN LÝ THỂ LOẠI SẢN PHẨM</div>
<?php $form=$this->beginWidget('CActiveForm', array(
		'id' => 'upload-form',
	    'enableAjaxValidation' => false,
	    'htmlOptions' => array('enctype' => 'multipart/form-data'
	),
)); ?>
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

<?php $this->endWidget(); ?>