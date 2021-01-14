<?php 
/*
	- Cookie la doan ma luu phia client (luu o bo nho cookie cua trinh duyet)
	- Ham time() s doi thoi gian ra mot so nguyen
	- Thiet lap gia tri cho cookie :setcookie(tencookie,giatri,thoigiantontai)
	- Truy xuat bien cookie :$_COOKIE["tencookie"]
	- xoa bien cookie 
		- Cach 1: neu thoi gian vuot qua thoi gian ton tai khi tao cookie thi cookie se duoc trinh duyet tu dong xoa
		- cach 2: set thoi gain ton tai cua bien cookie do ve hien tai
*/
 ?>
 <h1><?php echo time(); ?></h1>
 <?php 
 //tao bien cookie
 	setcookie("tenlop","PHP",time()+60);//thoi gian ton tai =time + so giay 
 	//chu y :sau khi thoi gian ton tai het thi cookie se tu dong bi xoa
 	//truy xuat bien cookie
 	echo isset($_COOKIE["tenlop"]) ? $_COOKIE["tenlop"]:"";
  ?>