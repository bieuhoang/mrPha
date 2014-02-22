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
	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionThemTheLoai(){
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
		$this->render('/admin/themTheLoai',array('model'=>$sp));
	}
	public function actionthemLoaiSanPham(){
		$pa = Sanpham::model()->findAll(array("condition" => "type = '1'"));
		$sp = new Sanpham();
		$upSp = Yii::app()->request->getPost("Sanpham");
		if($upSp != null && $upSp != ""){
			$sp->name = $upSp["name"];
			$sp->image = CUploadedFile::getInstance($sp,'image');
			$sp->type = 2;
			$sp->parent = $upSp["parent"];;
			if($sp->save()){
				$sp->image->saveAs(Yii :: getPathOfAlias('webroot.files.').'/images/'.CUploadedFile::getInstance($sp,'image'));
			}	
		}
		$this->render('/admin/themLoaiSanPham',array('model'=>$sp, 'pa' => $pa));
	}
	public function actionThemNhomSanPham(){
		$pa = Sanpham::model()->findAll(array("condition" => "type = '1'"));
		$sp = new Sanpham();
		$upSp = Yii::app()->request->getPost("Sanpham");
		if($upSp != null && $upSp != ""){
			$sp->name = $upSp["name"];
			$sp->image = CUploadedFile::getInstance($sp,'image');
			$sp->type = 3;
			$sp->parent = $upSp["loaisp"];;
			if($sp->save()){
				$sp->image->saveAs(Yii :: getPathOfAlias('webroot.files.').'/images/'.CUploadedFile::getInstance($sp,'image'));
			}
		}
		$this->render('/admin/themNhomSanPham',array('model'=>$sp, 'theloais'=>$pa));
	}
	public function actionthemSanpham(){
		$pa = Sanpham::model()->findAll(array("condition" => "type = '1'"));
		$sp = new Sanpham();
		$upSp = Yii::app()->request->getPost("Sanpham");
		if($upSp != null && $upSp != ""){
			$sp->name = $upSp["name"];
			$sp->image = CUploadedFile::getInstance($sp,'image');
			$sp->type = 3;
			$sp->parent = $upSp["loaisp"];;
			if($sp->save()){
				$sp->image->saveAs(Yii :: getPathOfAlias('webroot.files.').'/images/'.CUploadedFile::getInstance($sp,'image'));
			}
		}
		$this->render('/admin/themSanPham',array('model'=>$sp, 'theloais' => $pa));
	}
	public function actiongetChirld(){
		$id = Yii::app()->request->getParam("id");
		$thisSp = Sanpham::model()->findByPk($id);
		$chirldSp = Sanpham::model()->findAll(array("condition" => "parent = $id"));
		echo json_encode(array('thissp'=>$thisSp, 'chirld'=>$chirldSp));
	}	
}