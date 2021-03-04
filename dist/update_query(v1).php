<?php
    require_once 'conn.php';
    
    if(ISSET($_POST['update'])){
        
        $output_dir     = "uploads/";/* Path for file upload */
        $RandomNum      = time();
        $ImageName      = str_replace(' ', '-', strtolower($_FILES['v_image']['name']));
        $ImageType      = $_FILES['v_image']['type'][0];
        $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt       = str_replace('.', '', $ImageExt);
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;

        $ret[$NewImageName]= $output_dir.$NewImageName;
        
        if (!file_exists($output_dir)) {
            @mkdir($output_dir, 0777);
        }
        move_uploaded_file($_FILES["v_image"]["tmp_name"], $output_dir."/".$NewImageName);

        $v_id = $_POST['v_id'];
        $v_image = $NewImageName;
        $v_prefix = $_POST['v_prefix'];
        $v_name = $_POST['v_name'];
        $v_lname = $_POST['b_lname'];
        $v_age = $_POST['v_age'];
        $v_detail = $_POST['v_detail'];

        mysqli_query($conn, "UPDATE `villager1` SET `v_image` = '$v_image' , `v_prefix` = '$v_prefix' , `v_name` = '$v_name' , `v_lname` = '$v_lname' , `v_age` = '$v_age' , `v_detail` = '$v_detail' WHERE `v_id` = '$v_id'") or die(mysqli_error());
        
        header("location: villager1.php");
    }
?>