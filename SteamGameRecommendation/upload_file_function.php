<?php 

// 檢查受測者存放受測資料之資料夾是否已經存在
function folder_check($user_id){

$target_path = 'personality_member/'.$user_id;

if (!file_exists($target_path)) {

  mkdir($target_path, 0777, true);
	
}


}


// 上傳人格特質心理測驗結果之圖片檔
function upload_personality_image($user_id, $user_name){

if (isset($_FILES['file']['type']) && $_FILES['file']['type'] != null) {
	

$legal_format = array('jpeg','jpg','png');

$temporary = explode('.', $_FILES['file']['name']);

$file_legal = end($temporary);




if ((($_FILES['file']['type'] == 'image/png') || ($_FILES['file']['type'] == 'image/jpg') || ($_FILES['file']['type'] == 'image/jpeg')) && ($_FILES['file']['size'] < 1000000) && in_array($file_legal, $legal_format)) {
	

// 若上傳發生錯誤
if ($_FILES['file']['error'] > 0) {


 return 'file upload error';
 

}else if (file_exists('personality_member/'.$user_id.'/'.$user_name.'_'.$_FILES['file']['name'])) {


return 'file already uploaded'; 

	
}else{

$source_path = $_FILES['file']['tmp_name'];

$store_path = 'personality_member/'.$user_id.'/'.$user_name.'_'.$_FILES['file']['name'];



if (move_uploaded_file($source_path, $store_path)) {



	return 'file upload success';
}else{

return 'file upload error';

	
}






}






}else{


return 'illegal file size or type';




}








}




} //<--upload_personality_image-->end






?>