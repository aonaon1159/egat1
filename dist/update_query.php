<?php
    require_once 'conn.php';
    
    if(ISSET($_POST['update'])){
        
        $output_dir     = "uploads/";/* Path for file upload */
        $RandomNum      = time();
        $ImageName      = str_replace(' ', '-', strtolower($_FILES['b_image']['name']));
        $ImageType      = $_FILES['b_image']['type'][0];
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt       = str_replace('.', '', $ImageExt);
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;

        $ret[$NewImageName]= $output_dir.$NewImageName;
        
        if (!file_exists($output_dir)) {
            @mkdir($output_dir, 0777);
        }
        move_uploaded_file($_FILES["b_image"]["tmp_name"], $output_dir."/".$NewImageName);

        $b_id = $_POST['b_id'];
        $b_image = $NewImageName;
        $b_prefix = $_POST['b_prefix'];
        $b_name = $_POST['b_name'];
        $b_lname = $_POST['b_lname'];
        $b_status = $_POST['b_status'];
        $b_phone = $_POST['b_phone'];

        mysqli_query($conn, "UPDATE `board1` SET `b_image` = '$b_image' , `b_prefix` = '$b_prefix' , `b_name` = '$b_name' , `b_lname` = '$b_lname' , `b_status` = '$b_status' , `b_phone` = '$b_phone' WHERE `b_id` = '$b_id'") or die(mysqli_error());
        
        header("location: board1.php");
    }
?>