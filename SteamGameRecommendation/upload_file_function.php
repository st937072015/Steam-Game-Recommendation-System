<?php 

// 上傳人格特質心理測驗結果之圖片檔
function upload_personality_image(){

if (isset($_FILES['file']['type'])) {
	

$legal_format = array('jpeg','jpg','png');

$temporary = explode(".", $_FILES['file']['type']);

$file_legal = end($legal_format)



}






}






?>