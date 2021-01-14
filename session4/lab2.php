<?php 
	class SinhVien{
		public $hoten="";
		public $email = "";
		//ham tao
		public function __construct($ht,$m){
			$this->hoten = $ht;
			$this->email = $m;
		}
		public function displaySinhVien(){
			echo"<h1>ho ten:{$this->hoten}</h1>";
			echo"<h1>email:{$this->email}</h1>";
		}
	}
	//khoi tao doi tuong
	$sv =new SinhVien("Nguyen Van B","nvb@gmail.com");
 ?>