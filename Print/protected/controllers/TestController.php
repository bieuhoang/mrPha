<?php
class controllerTest extends Controller
{
public $layout = 'main'; 
	
	public function accessRules()
	{
		return array(
			array(
					'allow',
					'actions' => array('index','view'),
					'users' => array('*'),
			),
			
		);
	}
	
	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Wsmembersdetails');
		$this->render('index',array('dataProvider'=>$dataProvider));
	}
}