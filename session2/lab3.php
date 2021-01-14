<!DOCTYPE html>
<html>
<head>
	<title>lab3</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 300px; margin: auto;">
	<legend> chon so luong</legend>
	<form method="get" action="">
		<select id ="soluong" style="width: 200px;"> 
			<?php for(i = 1 ; $i <=5 ; $i++) ?>
				<option value="<?php echo $i; ?>"> <?php  echo $i; ?></option>
			<?php endfor; ?>
		</select>
		<!-- khi an nut submit thi se submit form -->
		<input type="submit" value="chon1">
		<!-- su dung form de di chuyen den url khac  -->
		<input type=" button" onclick="poPage();" value="chon2">
	</form>
</fieldset>
<script type="text/javascript">
	function poPage(){
		//dichuyen den mot url khac
		location.href="lab3.php?soluong="+document.getlemetById("soluong").value;
	}
</script>
<?php if(isset($_GET["soluong"])) ?>
	<fieldset style="width: 300px; margin: 100px auto;">
		<legend> textbox</legend> 
		<form method="post" action="lab3.php?soluong=<?php echo $GET["soluong"];?>">
			<?php for($i = 1 ;$i <= $_GET["soluong"]; $i++) ?>
				<input style="margin: 10px;" required type="text" name="txt <?php  echo $soluong ?>">
			<?php endfor; ?>
			<input type="submit" value="get value" name="">
		</form>
	</fieldset>
<?php endif; ?>
<?php  if($_SERVER["REQUEST_METHOD"]=="POST") :?>
	<fieldset style="width: 300px; margin: 100px auto;">
		<legend> textbox</legend> 
		<?php for($i = 1 ;$i <= $_GET["soluong"]; $i++) ?>
			<p><?php  echo $_POST["txt".$i] ;?></p>
		<?php endfor; ?>
	</fieldset>
<?php endif ;?>
</body>
</html>