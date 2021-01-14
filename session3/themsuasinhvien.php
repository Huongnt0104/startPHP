<?php 
	session_start();
	$action = isset($_SESSION["action"]) ? $_GET["action"]:"";
	//tao bine formAction de biet khi an nut submit thi form se den dau
	$formAction = "";
	switch ($action) {
		case "add":
			$formAction = "themsuasinhvien.php?action=doAdd";
		break;
		case "doAdd":
			$hoten = $_POST["hoten"];
			$email = $_POST["email"];
			//gan vao thanh mot phan tu cua bien session array
			$_SESSION["sinhvien"][]= array("hoten"=>$hoten ,"email"=>$email);
			//di chuyen den mot url khac
			header("location:danhsachsinhvien.php");
		break;
		case "delete":
			$key = isset($_GET["key"]) ? $_GET["key"]:"";
			//duyet session array ,xoa phan tu tuong ung voi key truyen vao
			foreach ($_SESSION["sinhvien"] as $k => $v) {
				if($key == $k)
					unset($_SESSION["sinhvien"][$k]);
				}
				//di chuyen den mot url khac
				header("location:danhsachsinhvien.php");
			case "edit"
			$key = isset($_GET["key"]) ? $_GET["key"]:"";
			$formAction = "danhsachsinhvien.php?action=doedit&key=$key";
			foreach ($_SESSION["sinhvien"] as $k => $v) {
					if($key == $k)
						$sv=$_SESSION["sinhvien"][$k];
				}
			case "doedit":
				$key = isset($_GET["key"]) ? $_GET["key"]:"";
				$hoten = $_POST["hoten"];
				$email = $_POST["email"];
				foreach ($_SESSION["sinhvien"] as $k=>$v) {
					if($key == $k)
						$_SESSION["sinhvien"][]= array("hoten"=>$hoten ,"email"=>$email);
				}
				header("location:danhsachsinhvien.php");
			break;
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>them sua sinh vien</title>
 	<meta charset="utf-8">
 </head>
 <body>
 <fieldset style="width: 300px; margin: auto;">
 	<legend>them sua sinh vien</legend>
 	<form method="post" action=" <?php echo $formAction ?>">
 		<table cellpadding="5" border="0" style="border-collapse: collapse;width: 100%">
 			<tr>
 				<td>Ho ten</td>
 				<td><input type="text" name="hoten" value="<?php echo isset($sv["hoten"])?$sv["hoten"]:""; ?>" required></td>
 			</tr>
 			<tr>
 				<td>Email</td>
 				<td><input type="email" name="email" value="<?php echo isset($sv["email"])?$sv["email"]:""; ?>" required></td>
 			</tr>
 			<tr>
 				<td></td>
 				<td><input type="submit" value="Thuc hien"></td>
 			</tr>
 		</table>
 	</form>
 </fieldset>
 </body>
 </html>