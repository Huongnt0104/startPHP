<fieldset style="width: 500px; margin: auto;">
	<legend>Danh sách chức danh</legend>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
		<tr>
			<th>Tên chức danh</th>
			<th style="width: 100px;"></th>
		</tr>
		<?php foreach($data as $rows): ?>
		<tr>
			<td><?php echo $rows->tenchucdanh; ?></td>
			<td style="text-align: center;"></td>
		</tr>
		<?php endforeach; ?>
	</table>
</fieldset>