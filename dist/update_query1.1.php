<?php
    require_once 'conn.php';

    if(ISSET($_POST['update'])){
        $b_id = $_POST['b_id'];
        $b_prefix = $_POST['b_prefix'];
        $b_name = $_POST['b_name'];
        $b_lname = $_POST['b_lname'];
        $b_status = $_POST['b_status'];
        $b_detail = $_POST['b_detail'];

        mysqli_query($conn, "UPDATE `board1.1.` SET `b_prefix` = '$b_prefix' , `b_name` = '$b_name' , `b_lname` = '$b_lname' , `b_status` = '$b_status' , `b_detail` = '$b_detail' WHERE `b_id` = '$b_id'") or die(mysqli_error());
        
        header("location: board1.1.php");
    }
?>