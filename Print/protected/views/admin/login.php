<?php
$this->pageTitle=Yii::app()->name . ' - login';
?>
<div class="loginContent" style="width: 100%;padding-top:10%;height: auto;">
	<?php	$form = $this->beginWidget('CActiveForm', array(
								'id'=>'adminlogin-form',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
								'validateOnSubmit'=>true,
							),
			)); ?>
			<div class="row">
				<div class="formLabel">メールアドレス</div>
				<?php echo $form->textField($user,'email'); ?>
				<div class="errorMessage" id="emailError" style="display:none"></div>
			</div>
			<div class="row">
				<div class="formLabel">パスワード</div>
				<?php echo $form->passwordField($user,'password'); ?>
				<div class="errorMessage" id="passwordError" style="margin-left: 30px;display:none"></div>
			</div>
			<div class="row" style="text-align: right; width: 61%;">
				<input type="checkbox" name="remember" /> <div class="formLabel" style="font-size: 12px; width: 220px;"> メールアドレスとパスワードを保存する </div>
			</div>
			<div class="clear">&nbsp;</div>
	        <div class="loginButton" style="float:left; margin-top: 0;margin-left: 47%;" onclick="checkLogin()"><div class="catalogButton">Login</div></div>
	<?php $this->endWidget(); ?>
</div>
<script>
	$(function() {
		$('#Users_email').focus();
	});
	$(document).keypress(function(e) {
		if(e.keyCode==13){
			checkLogin();
		}
	});
	function checkLogin() {
		var checkLogin = true;
		$('#emailError').hide();
		$('#passwordError').hide();
		var email = $('#Users_email').val();
		if (email == '') {
			$('#Users_email').focus();
			$('#emailError').html("Email can't be blank");
			$('#emailError').show();
			checkLogin = false;
		}
		var password = $('#Users_password').val();
		if (password == '') {
			$('#Users_password').focus();
			$('#passwordError').html("Password can't be blank");
			$('#passwordError').show();
			checkLogin = false;
		}
		$('#adminlogin-form').submit();
	}
</script>