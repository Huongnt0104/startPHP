<?php 
	$str = "Hello World";
	class Test{
		//ham tao
		public function __construct(){
			//do $str la bien cuc bo nen khong su dung duoc ben trong nay
			//muon dung duoc bien str thi phai khai bao nos thanh bin toan cuc
			global $str;
			echo"<h1>$str</h1>";

		}
	}
	new Test();
 ?>