<!DOCTYPE html>
<html>
<head>
	<title>danh sach sản phẩm</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 500px; margin:30px auto;">
	<legend>Danh sach san pham</legend>
	<div style="margin-bottom: 5px;">
		<a href="danhsachsanpham.php?action=create">Create</a>
	</div>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;" >
		<tr>
			<th>Anh</th>
			<th>Ten san pham</th>
			<th style="width: 70px;"></th>
		</tr>
		<?php foreach ($_SESSION["mobile"] as$key => $mobile): ?>
		<tr>
			<td style="text-align: center;">
				<img src="upload/<?php echo $mobile["photo"]; ?>" style="width: 100px;">
			</td>
			<td><?php echo  $mobile["name"] ?></td>
			<td style="text-align: center;">
				<a href="danhsachsanpham.php?action=delete&key=<?php  echo $key; ?>">delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</fieldset>
</body>
</html>