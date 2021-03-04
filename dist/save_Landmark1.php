<?php
    require_once 'conn.php';

    if (isset($_POST['save'])) {
        $output_dir 	= "uploads/";/* Path for file upload */
        $RandomNum   	= time();
        $ImageName      = str_replace(' ', '-', strtolower($_FILES['l_image']['name']));
        $ImageType      = $_FILES['b_image']['type'][0];
        $ImageExt 		= substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt       = str_replace('.', '', $ImageExt);
        $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;

        $ret[$NewImageName]= $output_dir.$NewImageName;
        
        if (!file_exists($output_dir)) {
            @mkdir($output_dir, 0777);
        }
        move_uploaded_file($_FILES["l_image"]["tmp_name"], $output_dir."/".$NewImageName);

        $l_image = $NewImageName;
        $l_detail = $_POST['l_detail'];

        mysqli_query($conn, "INSERT INTO `landmark1` VALUES('', '$l_image' , '$l_detail')") or die(mysqli_error());
            
        header("location: Landmark1.php");
    }
