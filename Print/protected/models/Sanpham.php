<?php
class Sanpham extends AnlabActiveRecord {

	public $id;
	public $parent;
	public $child;
	public $name;
	public $status;	
	public $image;
	public $created;
	public $updated;	
	public $tieude;	
	public $noidung;
	public $type;
	public $gia;
	public $url;
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}	