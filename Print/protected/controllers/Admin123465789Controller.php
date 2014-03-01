<?php
class Admin123465789Controller extends CController {
	public $layout = 'admin';
	public function actionIndex() {
		if (isset ( Yii::app ()->user->id ) && (Yii::app ()->user->id != null) && (Yii::app ()->user->id > 0)) {
			$this->redirect ( array (
					"/admin123465789/adminHome" 
			) );
		} else {
			$user = new Users ();
			$userPosted = Yii::app ()->request->getPost ( "Users" );
			$user->email = $userPosted ["email"];
			$user->password = $userPosted ["password"];
			if ($user->login ()) {
				$this->redirect ( array (
						"/admin123465789/adminHome" 
				) );
			}
			$this->render ( '/admin/login', array (
					'user' => $user 
			) );
		}
	}
	public function actionadminHome() {
		$this->render ( '/admin/adminHome', array () );
	}
	public function actionLogout() {
		Yii::app ()->user->logout ();
		$this->redirect ( Yii::app ()->homeUrl );
	}
	public function actionThemTheLoai() {
		$sp = new Sanpham ();
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->name = $upSp ["name"];
			$sp->type = 1;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/themTheLoai', array (
				'model' => $sp 
		) );
	}
	public function actionthemSanpham() {
		$pa = Sanpham::model ()->findAll ( array (
				"condition" => "type = '1'" 
		) );
		$sp = new Sanpham ();
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->name = $upSp ["name"];
			$sp->noidung = $upSp ["noidung"];
			$sp->type = 3;
			$sp->parent = $upSp ["parent"];
			$sp->child = $upSp ["child"];
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/themSanPham', array (
				'model' => $sp,
				'theloais' => $pa 
		) );
	}
	public function actiongetChirld() {
		$id = Yii::app ()->request->getParam ( "id" );
		$thisSp = Sanpham::model ()->findByPk ( $id );
		$chirldSp = Sanpham::model ()->findAll ( array (
				"condition" => "parent = $id" 
		) );
		echo json_encode ( array (
				'thissp' => $thisSp,
				'chirld' => $chirldSp 
		) );
	}
	public function actionBanner() {
		$sp = Sanpham::model ()->find ( array (
				"condition" => "type = '4'" 
		) );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 4;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/Suabanner', array (
				'model' => $sp 
		) );
	}
	public function actionqctop() {
		$sp = new Sanpham ();
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 7;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/qcTop', array (
				'model' => $sp 
		) );
	}
	public function actionqctr() {
		$sp = new Sanpham ();
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 5;
			$sp->url = $upSp ["url"];
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/qctr', array (
				'model' => $sp 
		) );
	}
	public function actionqcph() {
		$sp = new Sanpham ();
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 6;
			$sp->url = $upSp ["url"];
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/qcph', array (
				'model' => $sp 
		) );
	}
	public function actionlh() {
		$sp = Sanpham::model ()->find ( array (
				"condition" => "type = '8'" 
		) );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->noidung = $upSp ["noidung"];
			$sp->type = 8;
			$sp->save ();
		}
		$this->render ( '/admin/lh', array (
				'model' => $sp 
		) );
	}
	public function actiongt() {
		$sp = Sanpham::model ()->find ( array (
				"condition" => "type = '9'" 
		) );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->noidung = $upSp ["noidung"];
			$sp->type = 9;
			$sp->save ();
		}
		$this->render ( '/admin/gt', array (
				'model' => $sp 
		) );
	}
	public function actionbando() {
		$sp = Sanpham::model ()->find ( array (
				"condition" => "type = '10'" 
		) );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 10;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/Suabando', array (
				'model' => $sp 
		) );
	}
	public function actiondstl() {
		$this->render ( '/admin/dstl', array () );
	}
	public function actiondtl() {
		$id = Yii::app ()->request->getParam ( "id" );
		$thisSp = Sanpham::model ()->findByPk ( $id );
		$thisSp->delete ();
		$this->redirect ( array (
				"/admin123465789/dstl" 
		) );
	}
	public function actionstl() {
		$id = Yii::app ()->request->getParam ( "id" );
		$sp = Sanpham::model ()->findByPk ( $id );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->name = $upSp ["name"];
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
			$this->redirect ( array (
					"/admin123465789/dstl" 
			) );
		} else {
			$this->render ( '/admin/themTheLoai', array (
					'model' => $sp 
			) );
		}
	}
	public function actionssp() {
		$pa = Sanpham::model ()->findAll ( array (
				"condition" => "type = '1'" 
		) );
		$id = Yii::app ()->request->getParam ( "id" );
		$sp = Sanpham::model ()->findByPk ( $id );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->name = $upSp ["name"];
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
			$this->redirect ( array (
					"/admin123465789/dstl" 
			) );
		} else {
			$this->render ( '/admin/themSanPham', array (
					'model' => $sp,
					'theloais' => $pa 
			) );
		}
	}
	public function actiondssp() {
		$this->render ( '/admin/dssp', array () );
	}
	public function accessRules() {
		return array (
				array (
						'allow',
						'actions' => array (
								'index',
								'adminHome' 
						),
						'users' => array (
								'*' 
						) 
				)
				,
				array (
						'allow',
						'actions' => array (
								'index',
								'adminHome',
								'ThemTheLoai',
								'themSanpham',
								'Banner',
								'qctop',
								'lh',
								'gt',
								'bando',
								'dstl',
								'dtl',
								'stl',
								'ssp',
								'dssp',
								'qctr',
								'qcph' 
						),
						'users' => array (
								'@' 
						) 
				)
				,
				array (
						'deny',
						'users' => array (
								'*' 
						) 
				)
				 
		)
		;
	}
}