<?php
    require_once 'conn.php';

    if (isset($_POST['save'])) {
        $b_prefix = $_POST['b_prefix'];
        $b_name = $_POST['b_name'];
        $b_lname = $_POST['b_lname'];
        $b_status = $_POST['b_status'];
        $b_detail = $_POST['b_detail'];

        mysqli_query($conn, "INSERT INTO `board1.2` VALUES('', '$b_prefix', '$b_name' , '$b_lname' , '$b_status' , '$b_detail')") or die(mysqli_error());
            
        header("location: board1.1.php");
    }
