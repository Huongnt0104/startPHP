<?php 
	/*
		- Phuong thuc post: sau khi submit form thi gia tri cac bien (bien form control) su duoc truyen ngam tu trang nay qua trang khac
		- Phuong thuc get: sau khi submit form thi tat ca cac bien (bien form control) se truyen len url
			- Cau truc: tentrang.php?bien1=giatri1&bien2=giatri2...
				- Cac cap bien=giatri se cach nhau boi dau &
			- Su dung doi tuong $_GET["tenbien"] de lay gia tri
				- Chu y: neu tenbien khong ton tai tren url thi $_GET["tenbien"] se khong ton ton tai
	*/				
 ?>
 <fieldset style="width: 300px; margin:auto;">
 	<legend>Form GET</legend>
 	<!-- mac dinh the form khi khong co thuoc tinh method thi mothod mac dinh la get -->
 	<form method="get">
 		<input type="text" name="txt" required> 
 		<input type="submit" name="btn" value="CLick">
 		<h1><?php echo isset($_GET["txt"]) ? $_GET["txt"] : ""; ?></h1>
 	</form>
 </fieldset>