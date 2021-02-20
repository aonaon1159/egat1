<?php
    require_once 'conn.php';

    $b_id = $_POST['b_id'];
    $b_image = $_POST['b_image'];
    $b_name = $_POST['b_name'];
    $b_lname = $_POST['b_lname'];
    $b_status = $_POST['b_status'];
    $b_phone = $_POST['b_phone'];

        echo $response;

        mysqli_query($conn, "UPDATE `board1` SET `b_image` = '$b_image' , `b_name` = '$b_name' , `b_lname` = '$b_lname' , `b_status` = '$b_status' , `b_phone` = '$b_phone' WHERE `b_id` = '$b_id'") or die(mysqli_error());
        
        header("location: board1.php");
