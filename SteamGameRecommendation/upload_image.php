<?php 
require_once("mysql_con.php");

require_once("upload_file_function.php");

require_once("test_status.php");

session_start();


$user_id = $_SESSION['user_id'];

$user_name = md5($_SESSION['username']);


folder_check($user_id, $user_name);

echo upload_personality_image($user_id, $user_name);

test_update_status($user_id, 'personality_form_finish',$conn);





?>