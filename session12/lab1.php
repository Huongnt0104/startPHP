<fieldset style="width: 300px; margin:100px auto;">
	<legend>Form</legend>
	<form id="frm" method="post" action="">
		<input type="text" name="txt" required> 
		<!-- 
			- Muon submit duoc form den action thi can co nut submit
		 -->
		<input type="submit" value="Click"> 
		<!-- 
			Khi khong co nut submit, muon submit duoc form thi phai ket hop voi javascript
		 -->
		<a onclick="submitForm();" href="#">Click</a>
	</form>
	<h1><?php echo isset($_POST["txt"]) ? $_POST["txt"]:""; ?></h1>
</fieldset>
<script type="text/javascript">
	function submitForm(){
		//su dung lenh javascript de submit form
		document.getElementById("frm").submit();
	}
</script>