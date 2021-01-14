<?php 
	session_start();
	class Products{
		public function __construct(){
			//kiem tra neu bien session chua ton tai thi khoi tao no 
			if (isset($_SESSION["mobile"])==false)
				$_SESSION["mobile"]=array();
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				default:
					include "viewmobile.php";
					break;
				case "create":
					$formAction = "danhsachsanpham.php?action=doCreate";
					include "form.php";
					break;
				case "doCreate":
					$name = $_POST["name"];
					$photo = time().$_FILES["photo"]["name"];
					//thuc hien upload anh
					move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/$photo");
					//toa mot gia tri cua array
					$_SESSION["moble"][]= array("name"=>$name,"photo"=>$photo);
					header("location:danhsachsanpham.php");
					break;
				case "delete"
					$key = isset()
			}
		}
	}
	new Products();
 ?>