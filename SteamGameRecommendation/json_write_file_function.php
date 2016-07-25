<?php

// 寫入json檔案
function write_json_file($user_id, $file_name, $store_array){



$json_data = json_encode($store_array, JSON_PRETTY_PRINT);


if (file_put_contents('personality_member/'.$user_id. '/' .$file_name. '_' . $user_id. '.json', $json_data)) {
	


  return true;

}else{

 return false;



}







}






?>