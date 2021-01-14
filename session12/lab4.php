<?php 
	//dinh nghia bien array
	$mobile = array();
	$mobile[] = "IPhone";
	$mobile[] = "Samsung";
	$mobile[] = "LG";
	$mobile[] = "Nokia";
	$mobile[] = "Oppo";
	//hien thi cau truc cua bien array
	echo "<pre>";
	print_r($mobile);
	echo "</pre>";
 ?>
 <fieldset style="width: 300px; margin-top: 30px;">
 	<legend>Duyet theo cach 1</legend>
 	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
 		<tr>
 			<th>Key</th><th>Value</th>
 		</tr>
 		<?php foreach($mobile as $key=>$value): ?>
 		<tr>
 			<td><?php echo $key; ?></td><td><?php echo $value; ?></td>
 		</tr>
 		<?php endforeach; ?>
 	</table>
 </fieldset>

 <fieldset style="width: 300px; margin-top: 30px;">
 	<legend>Duyet theo cach 2</legend>
 	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
 		<tr>
 			<th>Value</th>
 		</tr>
 		<?php foreach($mobile as $value): ?>
 		<tr>
 			<td><?php echo $value; ?></td>
 		</tr>
 		<?php endforeach; ?>
 	</table>
 </fieldset>