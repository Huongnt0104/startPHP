<fieldset style=" width: 500px; margin: auto;">
	<legend>Danh sach phong ban</legend>
 	<table cellpadding="5" border="1" style="border-collapse: collapse;width:100% ;" >
 		<tr>
 			<th>Ten phong ban</th>
 			<th style="width: 100px;"></th>
 		</tr>
 		<?php foreach($data as $rows): ?>
 		<tr>
 			<td><?php echo $rows->tenphongban; ?></td>
 			<td style="text-align: center;"></td>
 		</tr>
 	<?php endforeach; ?>
 	</table>
</fieldset>