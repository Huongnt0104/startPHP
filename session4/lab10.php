<?php 
	function hello($str1, $str2 = NULL){
		echo "<h1>$str1 $str2</h1>";
	}
	//neu ham hello chi truyen vaof mot tham so thi $str2= NULL
	hello("Hello");
	hello("Hello",2020);
 ?>