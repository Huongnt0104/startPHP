<?php 
	/*
		-Khoi lenh switch case
		switch(gia tri){
			case khoanggiatri1:
				code;
				break;
			case khoanggiatri2:
				code;
				breack;
			default:
				code;
				breack;
		}
	*/
		//dinh nghia hang so  -> khong the thay doi duoc gia tri neu la hang
		define("Hello", "hello");
		echo hello;
		
		$so=1;
		switch (@so) {
			case 1:
				echo "<h1>mot</h1>";
				break;
			case 2:
				echo "<h1>hai</h1>";
				break;
			case 3:
				echo "<h1>ba</h1>";
				break;
			default:
				echo"<h1> so nay khong nam trong khoang tu mot toi ba</h1>";
				break;
		}
 ?>