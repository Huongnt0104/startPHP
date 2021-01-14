<!DOCTYPE html>
<html>
<head>
	<title>lab3</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 320px; margin:auto;">
	<legend>Chon so luong</legend>
	<form method="get" action="">
		<select name="soluong" id="soluong" style="width:200px;">
			<?php for($i = 1; $i <= 5; $i++): ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>
		</select>
		<!-- khi an nut submit thi se submit form -->
		<input type="submit" value="Chon1">
		<!-- su dung javascript de di chuyen den url khac -->
		<input type="button" onclick="goPage();" value="Chon2">
	</form>
</legend>
</fieldset>
<script type="text/javascript">
	function goPage(){
		//di chuyen den mot url khac
		location.href="lab3.php?soluong="+document.getElementById("soluong").value;
	}
</script>
<?php if(isset($_GET["soluong"])): ?>
	<fieldset style="width: 300px; margin:100px auto;">
		<legend>Textbox</legend>
		<form method="post" action="lab3.php?soluong=<?php echo $_GET["soluong"]; ?>">
			<?php for($i = 1; $i <= $_GET["soluong"]; $i++): ?>
				<input style="margin:10px;" required type="text" name="txt<?php echo $i;?>">
			<?php endfor; ?> 
			<input type="submit" value="Get Value">
		</form>
	</fieldset>
<?php endif; ?>
<?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
	<fieldset style="width: 300px; margin:100px auto;">
		<legend>Textbox</legend>
		<?php for($i = 1; $i <= $_GET["soluong"]; $i++): ?>
			<p><?php echo $_POST["txt".$i]; ?></p>
		<?php endfor; ?> 
	</fieldset>
<?php endif; ?>
</body>
</html>