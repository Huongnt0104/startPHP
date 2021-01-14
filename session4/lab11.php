<?php ob_start(); ?>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<?php 
	//co the doc noi dung cua mot doan van ban hoac mot website vao mot bien
	$content = ob_get_contents();

 ?>
 <?php ob_end_clean(); ?>
 <?php echo $content; ?>