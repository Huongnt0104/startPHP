<?php 
/*
	-Phuong thuc post:sau khi submit form thi gia tri cac bien (bien form control) su dung duoc truyen ngam tu trang nay qua trang khac 
	- Phuong thuc get: sau khi submit form thi tat ca cacc bien (bien form con trol) se truyen len url
		- Cau truc :jten trang.php?bien1=giatri1&bien2=giatri2...
			- Cac cap bien=gia tri se cach nhau boi dau &
		- Su dung doi tuong $_GET["tn bien"] de lay gia tri
			-chu y :neu tenbien khong ton tai tren url  thi $_GET["tn bien" se khong ton tai
*/
 ?>
 <fieldset style=" width: 300px; margin: auto;">
 	<legend>jform GET</legend>
 	<!-- madinh the form khi khong co thuoc tinh method thi method mac dinh la GET -->
 	<form method="get">
 		<input type="text" name="txt" required>
 		<input type="submit" name="btn" value="click">
 		<h1><?php echo $_GET["txt"]; ? $_GET["txt"] : "";?></h1>
 	</form>

 </fieldset>