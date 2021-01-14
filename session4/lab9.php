<?php 
	//ham extract(ten bien array) se bien ten key thanh ten bien
	$sinhvien = array("hoten"=>"Nguyen van A","email"=>"nva@gmail.com");
	//su dung ham extract de bien ten key thanh ten bien
	extract($sinhvien);	
	echo("<h1>$hoten</h1>");
	echo("<h1>$email</h1>");
 ?>