<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 300px; margin: auto;">
	<legend>Form</legend>
	<form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
		<table cellpadding="5">
			<tr>
				<td>name</td>
				<td><input type="text" required name="name"></td>
			</tr>
			<tr>
				<td>photo</td>
				<td><input type="file" name="photo"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>