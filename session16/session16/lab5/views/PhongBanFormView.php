<fieldset style="width: 300px; margin:50px auto;">
	<legend>Form</legend>
	<form method="post" action="<?php echo $action; ?>">
		<table cellpadding="5">
			<tr>
				<td>Tên</td>
				<td><input type="text" name="tenphongban" value="<?php echo isset($record->tenphongban)?$record->tenphongban:""; ?>" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Thực hiện"></td>
			</tr>
		</table>
	</form>
</fieldset>