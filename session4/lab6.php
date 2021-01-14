<?php 
	class Test1{
		public $str="PHP";
		public function hello1(){
			echo"<h1>class Test1: Hello World</h1>";
		}
	}
	/*
		class Test2 ke thua class Test1:
			- Cu phap:Test2 extends Test1
			- Khi do ben trong class Test2 co the dung duoc cac ham,cac bien cua class Test1(tuy thuoc vao tam vuc cua bien)
		- Tam vuc cua bien
			- Tam vuc public co the tac dong duoc tu
				- Trong chinh class do
				- Trong class duoc ke thua
				- Tu doi tuong cua class
			- Tam vuc protectd co the tac dong duoc 
				- trong chinh class do
				- Trong class duoc ke thua
			- Tam vuc private co the tac dong duoc
				- Trong chinh class do
	*/
	class Test2 extends Test1{
		public function hello2(){
			echo"<h1>class Test2: Hello World</h1>";
			//do class Test2 ke thua class Test1 nen co the goi cac ham, cac bien cua class Test2
			echo"<h1>$this->str</h1>";
			$this->hello1();
		}
	}
	$obj = new Test2();
	$obj->hello2();
 ?>