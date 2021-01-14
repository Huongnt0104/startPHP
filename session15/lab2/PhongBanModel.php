<?php 
	//class chua cac ham thao tac csdl
	trait ChucDanhModel{
		//ham lay danh sach cac ban ghi 
		public function listChucDanh(){
			//lay bien ket noi tu file connection
			$conn = Connection::getInstance();
			//truy vao chuoi truy van, tra ket qua ve mot bien object
			$query = $conn->query("select * from phongban");
			//duyet tat ca cac ban ghi tra ve
			$result = $query->fetchAll();
			//tra ve ket qua
			return $result;
		}
	}
 ?>