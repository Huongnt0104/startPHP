<?php 
	//class chua cac ham thao tac csdl
	trait ChucDanhModel{
		//ham lay danh sach cac ban ghi 
		public function listChucDanh(){
			//lay bien ket noi tu file connection
			$conn = Connection::getInstance();
			//truy vao chuoi truy van, tra ket qua ve mot bien object
			$query = $conn->query("select * from chucdanh");
			//duyet tat ca cac ban ghi tra ve
			$result = $query->fetchAll();
			//tra ve ket qua
			return $result;
		}
		//ham lay mot ban ghi tuong ung voi machucdanh truyen vao
 		public function getChucDanh($machucdanh){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$query = $conn->query("select * from chucdanh where machucdanh=$machucdanh");
 			//lay mot ban ghi tra ve
 			$result = $query->fetch();
 			//tra ve ket qua
 			return $result;
 		}
 		//ham update ban ghi
 		public function updateChucDanh($machucdanh){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			$tenchucdanh = $_POST["tenchucdanh"];
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$conn->query("update chucdanh set tenchucdanh='$tenchucdanh' where machucdanh=$machucdanh");
 		}
 		//ham delete ban ghi
 		public function deleteChucDanh($machucdanh){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$conn->query("delete from chucdanh where machucdanh=$machucdanh");
 		}
 		//ham insert ban ghi
 		public function createChucDanh(){
 			//lay bien ket noi tu file Connection
 			$conn = Connection::getInstance();
 			$tenchucdanh = $_POST["tenchucdanh"];
 			//truy vao chuoi truy van, tra ket qua ve mot bien object
 			$conn->query("insert into chucdanh set tenchucdanh='$tenchucdanh'");
 		}
	}
 ?>