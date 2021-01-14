<?php 
	/*
		- Ham trong php (giong voi dinh nghia ham trong javascript)
			- Ham duoc dinh nghia: function tenham(){}
			- Quy tac dat ten ham giong voi quy tac dat ten bien
			- Trong mot trang khong duoc tao cac ham trung ten nhau 
			- Cac kieu ham:
				- Ham co gia tri tra ve
				- Ham co  gia tri truyen vao
				- Ham khong co gia tri truyen vao
				- Ham khong co gia tri tra ve
			- Goi ham: tenham();tenham(thamso1,thamso2...)
	*/
	//ham khong co tham so truyen vao
	function test1(){
		echo "<h1>ham khong co tham so truyen vao</h1>";
	}
	test1();
	//ham co tham so truyen vao
	function test2($thamso1,$thamso2){
		echo "<h1>ham co tham so truyen vao</h1>";
	}
	test2("hello",2020);
	//ham co gia tri tra ve,co tham so truyen vao
	function test3($so1,$so2)
	{
		$tong = $so1 +$so2;
		return "$so1 +$so2= $tong ";
	}
	echo test3(3,5);
 ?>