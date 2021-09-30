<?php
if(!is_dir("upload/". $_POST["hssv"] ."/")) {
    mkdir("upload/". $_POST["hssv"] ."/");
}
// Sử dụng vòng lặp for để lưu từng file trong mảng
foreach($_FILES['img_file']['name'] as $name => $value)
{
	$name_img = stripslashes($_FILES['img_file']['name'][$name]);
	$source_img = $_FILES['img_file']['tmp_name'][$name];
	$path_img = "upload/". $_POST["hssv"] ."/" . $name_img;
	move_uploaded_file($source_img, $path_img);
}

?>