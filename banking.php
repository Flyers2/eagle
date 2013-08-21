<?php
$intro =' Welcome to our banking program<br>';

echo $intro;
$register = '<a href="./banking.php?page=registration">Sign up here to register and get a $100 bonus</a>';

echo ($register);

	
		if (isset($_REQUEST['registration'])) {
		echo 'form';
		}
	

elseif(isset($_REQUEST['NULL'])) {
	
	echo '100 bonus will not last';
	
	
	} 







//if (!isset($_REQUEST['page'])) { 


?>

