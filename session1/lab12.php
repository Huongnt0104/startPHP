<?php 
	/*
		- Form su dung d gui du lieu tu trang nay qua trang khac
		- Form co cac trang thai
			- POST: truyen du lieu ngamtu trang nay qua trang khac
			- GET: truyen du lieu le url tu trang nay qua trang khac 
				- Cau truc: tentrang.php?bien1=giatri1&bien2=giatri2..
					- Cac bien cach nhau boi dau &
		- Cau truc cua form:
			<form method="post/get" action="ten trang can submit den">
				textbox,radio,checkbox,select ...
			</form>
		- Lay du lieu truyen theo kieu POST:$_POST["tenformcontrol"]
			-tenformcontrol:textbox,textarea,select...
		- lay du lieu theo kieu get:$_GET["tenformcontrol"]
		- Ham $_SERVER["REQUEST_METHOD"] se tra ve trang thai cua trang
		- Trang thai trang mac dinh là GET,khi an nut submit cua form den trang thai khac thi trang se den do la o trang thai POST
	*/
 ?>
 <h1><?php echo $_SERVER["REQUEST_METHOD"];?></h1>
 <form method="post" action="lab12.1.php">
 	<fieldset style="width: 350px;">
 		<legend>form</legend>
 		<input type="text" name="txt">
 		<!-- muon submit duoc form thi phia co nut submit -->
 		<input type="submit" value="Submit den action">
 	</fieldset>
 </form>