<?php 
	class Test1{
		public function hello1(){
			echo "<h1>Class test1:Hello world</h1>";
		}
	}
	class Test2{
		//tao mot bien
		public $t;
		//ham tao
		public function __construct(){
			//co the khoi tao bien $t la mot object cua class Test1, khi do tu bien $t co th goi den cac ham,cac bien trong class Test1
			$this->t=new Test1();
			//goi ham hello1 thong qua bien $t
			$this->t->hello1();
		}
	}
	new Test2();
 ?>