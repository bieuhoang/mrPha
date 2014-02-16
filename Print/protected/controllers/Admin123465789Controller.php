<?php
class Admin123465789Controller extends CController {
	public $layout = 'admin';
	public function actionIndex() {
		$this->redirect(array("/admin123465789/adminHome"));
	}
	public function actionIndex1() {
		if (isset(Yii::app()->user->id) && (Yii::app()->user->id != null) && (Yii::app()->user->id > 0)) {
			$this->redirect(array("/admin123465789/adminHome"));
		}else{
			$user = new Users('login');
			$userPosted = Yii::app()->request->getPost("Users");
		if (isset($userPosted)) {
		    $user->attributes = $userPosted;
			$user->remember = (isset($_POST['remember']) && $_POST['remember'])  ? true : false;
		    if ($user->validate('login') && $user->login()) {
			    $this->redirect(array("/admin"));
			}
		}
			$this->render('/admin/login',array('user' => $user));
		}		
	}
	public function actionadminHome(){
		$this->render('/admin/adminHome',array());
	}
	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	public function actionadd(){
		$sp = new Sanpham();
		$sp->id = "1";
		$sp->image = "TEST";
		$sp->save();
	}
}