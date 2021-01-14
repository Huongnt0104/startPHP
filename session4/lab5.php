<?php 
	class SinhVien{
		//tao bien array
		public $danhsach = array();
		public function setSinhVien($hoten,$email){
			$this->danhsach[]= array("hoten"=>$hoten,"email"=>$email);
		}
		public function displaySinhVien(){
			foreach ($this->danhsach as $sv) {
				echo "<h1>{$sv["hoten"]} - {$sv["email"]}</h1>";
			}
		}
	}
	$obj = new SinhVien();
	$obj->setSinhVien("Nguyen van A","nva@gmail.com");
	$obj->setSinhVien("Nguyen van B","nva@gmail.com");
	$obj->setSinhVien("Nguyen van C","nva@gmail.com");
	$obj->setSinhVien("Nguyen van D","nva@gmail.com");
	$obj->setSinhVien("Nguyen van E","nva@gmail.com");
	$obj->displaySinhVien();
 ?>