<?php 
	//load file data.php vao day
	include "data.php";
	// echo "<pre>";
	// print_r($tracnghiem);
	// echo "</pre>";
 ?>
<style type="text/css">
ul{list-style: none;}
</style>
<?php if($_SERVER["REQUEST_METHOD"] == "GET"): ?>
<script type="text/javascript">
	var n = 100;
	setInterval(function(){
		document.getElementById("time").innerHTML = n;
		n--;
		if(n == 0)
			document.getElementById("frm").submit();
	},1000);
</script>
<?php endif; ?>
 <h1 style="text-align: center;">Trắc nghiệm online</h1>
 <?php if($_SERVER["REQUEST_METHOD"] == "GET"): ?>
 <h1 style="text-align: center;" id="time"></h1>
 <fieldset style="width: 500px; margin:auto;"> 	
 	<legend>Chọn đáp án trả lời</legend>
 	<form id="frm" method="post" action="">
	 	<ul>
	 		<?php $n = 0; ?>
	 		<?php foreach($tracnghiem as $value): ?>
	 		<?php $n++; ?>
	 		<li>
	 			<b><?php echo $value["ten"]; ?></b>
	 			<ul>
	 				<li><input type="radio" name="cau<?php echo $n;?>" value="<?php echo $value["dapan1"]; ?>"> <?php echo $value["dapan1"]; ?></li>
	 				<li><input type="radio" name="cau<?php echo $n;?>" value="<?php echo $value["dapan2"]; ?>"> <?php echo $value["dapan2"]; ?></li>
	 				<li><input type="radio" name="cau<?php echo $n;?>" value="<?php echo $value["dapan3"]; ?>"> <?php echo $value["dapan3"]; ?></li>
	 			</ul>
	 		</li>
	 		<?php endforeach; ?>
	 	</ul>
	 	<input type="submit" value="Thực hiện">
 	</form>
 </fieldset>
<?php endif; ?>
 <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
 <fieldset style="width: 500px; margin:30px auto;">
 	<legend>Kết quả</legend>
 	<?php $n = 0; ?>
	<?php foreach($tracnghiem as $value): ?>
		<?php $n++; ?>
		<ul>
			<li>
				<b><?php echo $value["ten"]; ?></b>
				<ul>
					<li><?php echo isset($_POST["cau$n"])?$_POST["cau$n"]:""; ?> - <?php echo isset($_POST["cau$n"])&&$_POST["cau$n"]==$value["dapandung"]?"Đúng":"Sai"; ?></li>
				</ul>
			</li>
		</ul>	
	 <?php endforeach; ?>
 </fieldset>
 <?php endif; ?>