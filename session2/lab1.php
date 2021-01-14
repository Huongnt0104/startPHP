<fieldset style="width:  300px; margin: 100px auto;">
	<legend>form</legend>\
	<form id="frm" method="post" action="">
		<input type="text" name="txt" required>
		<!-- -Muon submit duoc form den action thi can co nut submit -->
		<input type="submit" value="click">
		<!-- khi khoong co nut submit ,muon submit duoc form thi phai ket hop voi javascript -->
		<a onclick="submitForm();" href=""> click</a>
	</form>
	<h1><?php echo esset($_POST["txt"]) ? $_POST["txt"]:"";?></h1>
</fieldset>
<script type="text/javascript">
	function submitForm(){
		//su dung lenh javascript de submit form 
		document.getElenmentById("frm").submit();
	}
</script>