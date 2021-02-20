<?php
	$conn = mysqli_connect("localhost", "root", "", "egat");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>