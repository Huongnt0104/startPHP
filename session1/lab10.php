<?php 
	/*
		-Vong lap white
			white(dieu kien ket thuc vong lap){code}
		- Vong lap do white
			do{
				code
			}white(dieu kien ket thuc vong lap);
	*/
	$n=0;
	while ($n<=5) {
		$n++;
		echo"<h1>$n</h1>";
	}
	//--
	do{
		$n++;
		echo "<h1 style='background:yellow;'>$n</h1>";
		# code...
	}while ($n<=10) ;
 ?>