<?
	$target_dir = "img/";
	$target_file = $target_dir.basename($_FILES["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

?>