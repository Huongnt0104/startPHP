<h1><?php echo $_SERVER["REQUEST_METHOD"];?></h1>
<!-- co the submit den chinh trang hien tai neu action khong ghi ten trang can submit den -->
<h1><?php echo isset($_POST["txt"]) ? $_POST["txt"] : ""; ?></h1>
 <form method="post" action="lab13.php">
 	<fieldset style="width: 350px;">
 		<legend>Form</legend>
 		<input type="text" name="txt">
 		<!-- muon submit duoc form thi phia co nut submit -->
 		<input type="submit" value="Submit den action">
 	</fieldset>
 </form>