<?php 
	//load file model
	include "models/PhongBanModel.php";
 	//class dieu khien viec hien thi du lieu
 	class PhongBanController{
 		//ket thua class PhongBanModel
 		use PhongBanModel;
 		//ham hien thi thong tin
 		public function index(){
 			//lay du lieu tu ham listPhongBan(class PhongBanModel)
 			$data = $this->listPhongBan();
 			//load file PhongBanView.php de hien thi ket qua
 			include "views/PhongBanView.php";
 		}
 	}
 	$objPhongBan = new PhongBanController();
 	$objPhongBan->index();
  ?>