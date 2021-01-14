<?php 
	//dinh nghia bien array
	$mobile = array();
	$mobile[] = "iphone";
	$mobile[] = "lg";
	$mobile[] = "samsung";
	$mobile[] = "oppo";
	$mobile[] = "nokia";
	//hien thi bien cau truc cua array
	echo "<pre>";
	print_r($mobile);
	echo "</pre>";
 ?>
 <fieldset style="width: 300px;">
 	<legend>Duyet theo cach 1</legend>
 	<table cellpadding="5" border="1" style=" border-collapse: collapse; width: 100%;">
 		<tr>
 			<!-- <th>key</th> -->
 			<th>value</th>
 		</tr>
 			<?php foreach ($mobile as $key => $value) ?>
 		<tr>
 			<!-- <td><?php echo $key; ?></td> -->
 			<td><?php echo $value ?></td>
 		</tr>
 	<?php endforeach ?>
 	</table>
 </fieldset>