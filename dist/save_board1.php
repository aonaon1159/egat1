<?php
	require_once 'conn.php';

    if(ISSET($_POST['save'])){
	    $b_image = $_POST['b_image'];
	    $b_name = $_POST['b_name'];
	    $b_lname = $_POST['b_lname'];
	    $b_status = $_POST['b_status'];
	    $b_phone = $_POST['b_phone'];

		mysqli_query($conn, "INSERT INTO `board1` VALUES('', '$b_image', '$b_name' , '$b_lname' , '$b_status' , '$b_phone')") or die(mysqli_error());
			
		header("location: board1.php");
	}
?>