<?php 
	/*
		- Khoi lenh if
			- Cach 1
				if(phep so sanh tra  ve true){thuc hien o day}
				else if(phep so sanh tra ve true ){thuc hien o day}
				else {thuc hien o day}
			-Cach 2:
				if (phep so sanh tra ve true):
					thuc hien o day
				else if(phep so sanh tra ve true):
					thuc hien o day
				endif
	*/
	$a = 5;
	if($a% 2==0){
		echo "$a la so chan ";
	}
	else
	{
		echo"$a la so le";
	}
 ?>
 <?php if($a % 2 == 0):?>
  	<h1><?php echo $a; ?>la so chan</h1>
 <?php else: ?>
  	<h1><?php echo $a; ?>la so le</h1>
 <?php endif ?>