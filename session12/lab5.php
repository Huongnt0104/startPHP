<fieldset style="width: 500px; margin:50px auto;">
	<legend>$_SERVER</legend>
	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
		<tr>
			<th>Name</th>
			<th>Detail</th>
		</tr>
		<?php foreach($_SERVER as $key=>$value): ?>
		<tr>
			<td><?php echo $key; ?></td>
			<td><?php echo $value; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</fieldset>