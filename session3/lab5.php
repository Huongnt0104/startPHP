<?php 
	session_start();
	/*
		- Cac kieu bien session: giong voi bien binh thuong
	*/
	// khoi tao bien session array
	$_SESSION["mobile"]=array();
	$_SESSION["mobile"][]="iphone";
	$_SESSION["mobile"][]="samsung";
	$_SESSION["mobile"][]="nokia";
	$_SESSION["mobile"][]="lg";
	$_SESSION["mobile"][]="oppo"
	echo "<pre>";
	print_r($_SESSION["mobile"]);
	echo "</pre>";
 ?>