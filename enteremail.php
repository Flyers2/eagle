<?php
	$input[] = $_POST['email'];
	$input[] =$_POST['name'];
	$file = "enteremail.csv";

file_put_contents($file, $input . PHP_EOL, FILE_APPEND);

echo "thank you for registering";
print_r($input);













?>
