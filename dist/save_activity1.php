<?php
    require_once 'conn.php';

    if (isset($_POST['save'])) {
        $v_activity = $_POST['v_activity'];
        $v_start = $_POST['v_start'];
        $v_end = $_POST['v_end'];

        mysqli_query($conn, "INSERT INTO `calendar1` VALUES('', '$v_activity', '$v_start' , '$v_end' )") or die(mysqli_error());
            
        header("location: villager calendar1.php");
    }
