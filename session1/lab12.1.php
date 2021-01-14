<h1><?php echo $_SERVER["REQUEST_METHOD"];?></h1>
<?php 
	//lay gia tri cua form control co name = txt
	//ham isset(doituong) se tra ve true neu doi tuong ton tai,nguoc lại se tra ve false 
	$str = insert($_POST["txt"]) ? $_POST["txt"] : "";//$_POST chi thuc hien duoc khi trang o trang thia POST ,con neu trang o trang thai GET thi $_POST se bao loi
 ?>
 <h1><?php echo $str; ?></h1>