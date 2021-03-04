<?php
    require_once 'conn.php';

    if(ISSET($_POST['delete'])){

        $sql = "DELETE FROM `board1` WHERE `b_id` = '".$_POST['b_id']."'";

        mysqli_query($conn,$sql)  or die(mysqli_error());
                
        header("location: board1.php");
    }   
?>
