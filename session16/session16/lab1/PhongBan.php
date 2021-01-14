<?php 
	//class ket noi csdl
	class Connection{
		//ham ket noi csdl, tra ket qua ve bien ket noi
		//neu su dung tu khoa static o ten ham thi co the: tenclass::tenham()
		public static function getInstance(){
			//$conn = new PDO("chuoi ket noi csdl",username,password);
			$conn = new PDO("mysql:hostname=localhost;dbname=php53_database","root","");
			//lay du lieu theo kieu unicode
			$conn->exec("set names utf8");
			//chi dinh kieu duyet cac ban ghi
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $conn;
		}
	}
 ?>
 <?php 
 	//class chua cac ham thao tac csdl
 	trait PhongBanModel{
 		//ham lay danh sach cac ban ghi
 		public function listPhongBan(){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$query = $conn->query("select * from phongban");
 			//lay tat ca cac ban ghi tra ve
 			$result = $query->fetchAll();
 			//tra ve ket qua
 			return $result;
 		}
 	}
  ?>
 <?php 
 	//class dieu khien viec hien thi du lieu
 	class PhongBanController{
 		//ket thua class PhongBanModel
 		use PhongBanModel;
 		//ham hien thi thong tin
 		public function index(){
 			//lay du lieu tu ham listPhongBan(class PhongBanModel)
 			$data = $this->listPhongBan();
 			//load file PhongBanView.php de hien thi ket qua
 			include "PhongBanView.php";
 		}
 	}
 	$objPhongBan = new PhongBanController();
 	$objPhongBan->index();
  ?>