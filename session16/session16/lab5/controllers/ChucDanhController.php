<?php 
	//load file model
	include "models/ChucDanhModel.php";
 	//class dieu khien viec hien thi du lieu
 	class ChucDanhController{
 		//ket thua class ChucDanhModel
 		use ChucDanhModel;
 		//ham hien thi thong tin
 		public function index(){
 			//lay du lieu tu ham listChucDanh(class ChucDanhModel)
 			$data = $this->listChucDanh();
 			//load file ChucDanhView.php de hien thi ket qua
 			include "views/ChucDanhView.php";
 		}
 	}
 	// $objChucDanh = new ChucDanhController();
 	// $objChucDanh->index();
  ?>