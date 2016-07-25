<?php  

// 檢查受測檔案是否存在

function check_file_exist($user_id, $file_name){


$file_path = 'personality_member/'.$user_id. '/' . $file_name .'_'. $user_id. '.json';

if (file_exists($file_path)) {
	
 return true;



}else{


return false;


}








}





?>