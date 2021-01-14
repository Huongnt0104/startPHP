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