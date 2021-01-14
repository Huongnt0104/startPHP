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
 		//ham edit phongban
 		public function edit(){
 			$maphongban = isset($_GET["maphongban"]) ? $_GET["maphongban"]:0;
 			//tao bien action de dua vao thuoc tinh action cua form
 			$action = "index.php?controller=PhongBan&action=editPost&maphongban=$maphongban";
 			//lay du lieu tu model
 			$record = $this->getPhongBan($maphongban);
 			//include form edit phong ban
 			include "views/PhongBanFormView.php";
 		}
 		//khi an nut submit edit
 		public function editPost(){
 			$maphongban = isset($_GET["maphongban"]) ? $_GET["maphongban"]:0;
 			$this->updatePhongBan($maphongban);
 			//quay tro lai MVC phongban
 			header("location:index.php?controller=PhongBan");
 		}
 		//ham delelte ban ghi
 		public function delete(){
 			$maphongban = isset($_GET["maphongban"]) ? $_GET["maphongban"]:0;
 			$this->deletePhongBan($maphongban);
 			//quay tro lai MVC phongban
 			header("location:index.php?controller=PhongBan");
 		}
 		//ham create phongban
 		public function create(){
 			//tao bien action de dua vao thuoc tinh action cua form
 			$action = "index.php?controller=PhongBan&action=createPost";
 			//include form edit phong ban
 			include "views/PhongBanFormView.php";
 		}
 		//khi an nut submit edit
 		public function createPost(){
 			$this->createPhongBan();
 			//quay tro lai MVC phongban
 			header("location:index.php?controller=PhongBan");
 		}
 	}
 	// $objPhongBan = new PhongBanController();
 	// $objPhongBan->index();
  ?>