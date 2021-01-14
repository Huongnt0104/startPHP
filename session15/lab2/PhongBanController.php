<?php 
	//load file model
	include "ChucDanhModel.php";
 	//class dieu khien viec hien thi du lieu
 	class ChucDanhController{
 		//ket qua class ChucDanhModel
 		use ChucDanhModel;
 		//ham hien thi thong tin
 		public function index(){
 			//lay du lieu tu ham listChucDanh(class ChucDanhModel)
 			$data = $this->listChucDanh();
 			//load file  ChucDanhView.php de hien thi ket qua
 			include "ChucDanhView.php";
 		}
 	}
 	$objChucDanh = new ChucDanhController();
 	$objChucDanh->index();	
  ?>