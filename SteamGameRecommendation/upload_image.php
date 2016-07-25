<?php 
require_once("mysql_con.php");

require_once("upload_file_function.php");

require_once("test_status.php");

session_start();


$user_id = $_SESSION['user_id'];

$user_name = md5($_SESSION['username']);


folder_check($user_id, $user_name);

// 圖片是否上傳成功
$image_upload_status = upload_personality_image($user_id, $user_name);


if ($image_upload_status == "file upload success") {
	test_update_status($user_id, 'personality_form_finish',$conn);
}


echo $image_upload_status;




?>