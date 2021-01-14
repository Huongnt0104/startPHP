<?php 
/*
	- session: la thong tin duoc luu o phia trinh duyet, goi la phien lam viec
		- Moi phien lam viec se khac o cac trinh duyet khac nhau
		- Phien lam viec s ton tai tren trin duyet,co nghia la thong tin cua phien lam viec do se ton tai tren cac tab cua trinh duyet
	- Voi moi phien lam viec ,se co mot session_id khac nhau bang ham session_id()
	- Muon su dung bien session phai start sesssion bang ham session_start()
	- Gan mot gia tri vao bien session: $_SESSION["tenbien"]=giatri
	- truy xuat bien session: $_SESSION["tenbien"]
	- Huy bien session:  unset($_SESSION["tenbien"])
*/
 ?>
 <?php 
 // muon su dung session thi phai start no
 	session_start();
  ?>
  <h1><?php echo session_id(); ?></h1>