<?php
	//muon bien nay ton tai tren nhieu trang thi phải start session, con khong thi bien nay chi tuong duong bien toan cuc
	session_start();
	//khoi tao bien session
	$_SESSION["tenlop"]="PHP";

  ?>
  <h1><?php echo $_SESSION["tenlop"]; ?></h1>