<?php 
$sp = Sanpham::model ()->find ( array (
		"condition" => "type = '9'"
) );
if($sp == null){
	echo "TRANG CHƯA ĐƯỢC CẬP NHẬT> LIÊN HỆ ADMIN";
}else{
	echo $sp->noidung;
}
?>