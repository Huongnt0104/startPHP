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
 		//ham lay mot ban ghi tuong ung voi maphongban truyen vao
 		public function getPhongBan($maphongban){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$query = $conn->query("select * from phongban where maphongban=$maphongban");
 			//lay mot ban ghi tra ve
 			$result = $query->fetch();
 			//tra ve ket qua
 			return $result;
 		}
 		//ham update ban ghi
 		public function updatePhongBan($maphongban){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			$tenphongban = $_POST["tenphongban"];
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$conn->query("update phongban set tenphongban='$tenphongban' where maphongban=$maphongban");
 		}
 		//ham delete ban ghi
 		public function deletePhongBan($maphongban){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$conn->query("delete from phongban where maphongban=$maphongban");
 		}
 		//ham insert ban ghi
 		public function createPhongBan(){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			$tenphongban = $_POST["tenphongban"];
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$conn->query("insert into phongban set tenphongban='$tenphongban'");
 		}
 	}
  ?>