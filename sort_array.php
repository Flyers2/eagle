<?php

	$products = array("knife",' clock',' pens',' beer');
	sort($products);
	// this does not work I don't know why!$products[]= array("apple", 'tshirt')'
	$products[] = 'cars';  //will not get sorted 
	echo "<pre>";
	print_r( $products) ;
	echo "</pre>";

	
	













?>
