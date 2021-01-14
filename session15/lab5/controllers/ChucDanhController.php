<?php 
	//load file model
	include "models/ChucDanhModel.php";
 	//class dieu khien viec hien thi du lieu
 	class ChucDanhController{
 		//ket qua class ChucDanhModel
 		use ChucDanhModel;
 		//ham hien thi thong tin
 		public function index(){
 			//lay du lieu tu ham listChucDanh(class ChucDanhModel)
 			$data = $this->listChucDanh();
 			//load file  ChucDanhView.php de hien thi ket qua
 			include "views/ChucDanhView.php";
 		}
 		//ham edit chucdanh
 		public function edit(){
 			$machucdanh = isset($_GET["machucdanh"]) ? $_GET["machucdanh"]:0;
 			//tao bien action de dua vao thuoc tinh action cua form
 			$action = "index.php?controller=ChucDanh&action=editPost&machucdanh=$machucdanh";
 			//lay du lieu tu model
 			$record = $this->getChucDanh($machucdanh);
 			//include form edit chuc danh
 			include "views/ChucDanhFormView.php";
 		}
 		//khi an nut submit edit
 		public function editPost(){
 			$machucdanh = isset($_GET["machucdanh"]) ? $_GET["machucdanh"]:0;
 			$this->updateChucDanh($machucdanh);
 			//quay tro lai MVC chucdanh
 			header("location:index.php?controller=ChucDanh");
 		}
 		//ham delelte ban ghi
 		public function delete(){
 			$machucdanh = isset($_GET["machucdanh"]) ? $_GET["machucdanh"]:0;
 			$this->deleteChucDanh($machucdanh);
 			//quay tro lai MVC chucdanh
 			header("location:index.php?controller=ChucDanh");
 		}
 		//ham create chucdanh
 		public function create(){
 			//tao bien action de dua vao thuoc tinh action cua form
 			$action = "index.php?controller=ChucDanh&action=createPost";
 			//include form edit chucdanh
 			include "views/ChucDanhFormView.php";
 		}
 		//khi an nut submit edit
 		public function createPost(){
 			$this->createChucDanh();
 			//quay tro lai MVC chucdanh
 			header("location:index.php?controller=ChucDanh");
 		}
 	}
 	// $objChucDanh = new ChucDanhController();
 	// $objChucDanh->index();	
  ?>