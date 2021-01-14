<fieldset style="width: 500px; margin: auto;">
	<legend>Danh sách phòng ban</legend>
	<div style="margin-bottom: 5px;">
		<a href="index.php?controller=ChucDanh&action=create">Create phòng ban</a>
	</div>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
		<tr>
			<th>Tên phòng ban</th>
			<th style="width: 100px;"></th>
		</tr>
		<?php foreach($data as $rows): ?>
		<tr>
			<td><?php echo $rows->tenchucdanh; ?></td>
			<td style="text-align: center;">
				<a href="index.php?controller=ChucDanh&action=edit&machucdanh=<?php echo $rows->machucdanh; ?>">Edit</a>&nbsp;&nbsp;
				<a href="index.php?controller=ChucDanh&action=delete&machucdanh=<?php echo $rows->machucdanh; ?>">Delete</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</fieldset>