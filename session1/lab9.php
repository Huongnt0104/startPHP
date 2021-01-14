<?php 
	/*
		-Vong lap for
			-Cach 1: 
				for(bat dau; ketthuc;khoang tang giam){code};
			- Cach 2:
				for(bat dau;ketthuc; khoang tang giam):
					code
				endfor;
	*/
	for($i=1;$i<=5;$i++)
	{
		echo "<h1>$i </h1>";

	}
 ?>
 <?php for($i=1;$i<=5;$i++): ?>
 	<h1 style="background: yellow;"><?php echo $i ?></h1>
 <?php endfor; ?>