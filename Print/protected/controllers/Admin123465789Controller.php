<?php
class Admin123465789Controller extends CController {
	public $layout = 'admin';
	public function actionIndex2() {
		$this->redirect(array("/admin123465789/adminHome"));
	}
	public function actionIndex() {
		if (isset(Yii::app()->user->id) && (Yii::app()->user->id != null) && (Yii::app()->user->id > 0)) {
			$this->redirect(array("/admin123465789/adminHome"));
		}else{
			$user = new Users();
			$userPosted = Yii::app()->request->getPost("Users");
		    $user->email = $userPosted["email"];
		    $user->password = $userPosted["password"];
		    if ($user->login()) {
		    	$this->redirect(array("/admin123465789/adminHome"));
			}
			$this->render('/admin/login',array('user' => $user));
		}		
	}
	public function actionadminHome(){
		$this->render('/admin/adminHome',array());
	}
	
	public function actionThemLoaiSanPham(){
		$sp = new Sanpham();
		$upSp = Yii::app()->request->getPost("Sanpham");
		if($upSp != null && $upSp != ""){
			$sp->name = $upSp["name"];
			$sp->image = CUploadedFile::getInstance($sp,'image');
			$sp->type = 1;
			if($sp->save()){
				$sp->image->saveAs(Yii :: getPathOfAlias('webroot.files.').'/images/'.CUploadedFile::getInstance($sp,'image'));
			}	
		}
		$this->render('/admin/themLoaiSanPham',array('model'=>$sp));
	}
	public function actionThemNhomSanPham(){
		$sp = new Sanpham();
		$upSp = Yii::app()->request->getPost("Sanpham");
		if($upSp != null && $upSp != ""){
			$sp->name = $upSp["name"];
			$sp->image = CUploadedFile::getInstance($sp,'image');
			$sp->type = 1;
			if($sp->save()){
				$sp->image->saveAs(Yii :: getPathOfAlias('webroot.files.').'/images/'.CUploadedFile::getInstance($sp,'image'));
			}	
		}
		$this->render('/admin/themNhomSanPham',array('model'=>$sp));
	}
	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}