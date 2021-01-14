<?php
	//start session
	session_start();
	//kiem tra xem bien session da ton tai chua ,neu chua ton tai thi khoi tao no
	if(isset($_SESSION["sinhvien"])==false) 
		$_SESSION["sinhvien"] = array();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>danh sach sinh vien</title>
 	<meta charset="utf-8">
 </head>
 <body>
 <style type="text/css">
 	a{
 		text-decoration: none;
 	}
 </style>
 <fieldset style="width: 400px;margin:30px auto;">
 	<legend>Danh sach sinh vien</legend>
 	<div style="margin-bottom: 5px;">
 		<a href="themsuasinhvien.php?action=add">Them sinh vien</a>
 	</div>
 	<table cellpadding="5" border="1" style="border-collapse: collapse;width: 100%">
 		<tr>
 			<th>Ho ten</th>
 			<th>Email</th>
 			<th style="width: 100px;"></th>
 		</tr>
 		<?php foreach ($_SESSION["sinhvien"] as $key => $value): ?>
 		<tr>
 			<td><?php echo $value["hoten"] ;?></td>
 			<td><?php echo $value["Email"] ;?></td>
 			<td style="text-align: center;">
 				<a href="themsuasinhvien.php?action=edit&key=<?php echo $key; ?>">edit</a>&nbsp;&nbsp;&nbsp;
 				<a href="themsuasinhvien.php?action=delete&key=<?php echo $key; ?>">delete</a>
 			</td>
 		</tr>
 	<?php endforeach; ?>
 	</table>
 </fieldset>
 </body>
 </html>