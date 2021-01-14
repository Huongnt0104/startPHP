<?php 
	trait A{
		public function a1(){
			echo "<h1>Class A, function a1</h1>";
		}
	}
	trait B{
		public function b1(){
			echo "<h1>Class B, function b1</h1>";
		}
	}
	class C{
		//khi cac class muon duoc ke thua khia bao bang tu khoa trai, thi co the ke thua va su dung o day bang cu phap sau
		use A;
		use B;
		public function c1(){
			echo "<h1>Class C, function c1</h1>";
			$this->a1();
			$this->b1();
		}
	}
	$obj = new C();
	$obj->c1();
 ?>