<?php 

// 從資料庫查詢並回傳受測者之所有受測進度狀態
function test_finish_status($user_id, $conn){
   

$status_query = "SELECT user_id, personality_form_finish, good_or_bad1, test1_finish, good_or_bad2, test2_finish FROM user_account_table WHERE user_id = '".$user_id."'";

$status_result_data = mysqli_query($conn, $status_query);

$status_result_num = mysqli_num_rows($status_result_data);


if($status_result_num > 0){

$row = mysqli_fetch_assoc($status_result_data);

return $row;



}else{

return false;

}



}



// 若受測者受測完畢 更新資料庫受測狀態之功能
function test_update_status($user_id, $var_string, $conn){


$status_update = "UPDATE user_account_table SET ".$var_string." = 1 WHERE user_id = $user_id";


if (mysqli_query($conn, $status_update)) {

  return true;

}else{


  return false;



}


}


















?>