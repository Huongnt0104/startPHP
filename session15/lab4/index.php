<?php 
	//load file Connection.php
	include "application/Connection.php";
 ?>
 <nav>
 	<ul>
 		<li><a href="index.php?controller=PhongBan">MVC phòng ban</a></li>
 		<li><a href="index.php?controller=ChucDanh">MVC chức danh</a></li>
 	</ul>
 </nav>
 <style type="text/css">
 	nav{
 		width: 1000px;
 		margin: 20px auto;
 	}
 	body{
 		font-family: arial;
 	}
 	a{
 		text-decoration: none;
 	}
 	nav ul{
 		padding:0px;
 		margin: 0px;
 		list-style: none;
 	}
 	nav ul li{
 		display: inline;
 	}
 	nav ul li a{
 		padding:20px;
 		color: green;
 	}
 </style>
 <?php 
 	$controller = isset($_GET["controller"]) ? $_GET["controller"]:"";
 	$action = isset($_GET["action"]) ? $_GET["action"]:"index";
 	//noi chuoi de thanh file controller vat ly
 	$fileController= "controllers/$controller"."Controller.php";
 	$classController = "$controller"."controller";
 	//kiem tra xem file vat ly co ton tai khong, neu co thi load no
 	if(file_exists($fileController)){
 		include $fileController;
 		//khoi tao object
 		$obj = new $classController();
 		//goi den ham trong object
 		$obj->$action();
 	}
  ?>