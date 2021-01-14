<?php 
	$sinhvien = array("hoten"=>"Nguyễn Văn A","email"=>"nva@gmail.com","namsinh"=>2000);
	echo "<pre>";
	print_r($sinhvien);
	echo "</pre>";
 ?>
 <h1><?php echo $sinhvien["hoten"]; ?></h1>
 <h1><?php echo $sinhvien["email"]; ?></h1>