<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("step1_test_function.php");
require_once("upload_file_function.php");
require_once("json_write_file_function.php");
require_once("check_file_function.php");

$user_id = $_SESSION['user_id'];

if (isset($_POST['start_test1']) && count($_SESSION['fav_cart']) > 0 && !check_file_exist($user_id, 'record') && !check_file_exist($user_id, 'rate')) {
	
$fav_game_array = $_SESSION['fav_cart'];

$user_id = $_SESSION['user_id'];

// 儲存所有計算排行結果
$record = array();

// 儲存所有方法之所選擇遊戲之平均人格分數
$average_personality_score = array();

// 儲存受測者所挑選之遊戲
$record['select_game'] = array_flip($fav_game_array);

// 檢查受測者儲存受測資料的資料夾是否存在了
folder_check($user_id);


// 本研究的Rock法
$sum1_1 = get_sum_json('personality_score_json/none_review_merge/Rock_none_review_merge.json', $fav_game_array);

$score1_1 = score_rank('personality_score_json/none_review_merge/Rock_none_review_merge.json', $fav_game_array, $sum1_1);

$record['Rock_none_review_merge'] = $score1_1;

$average_personality_score['Rock_none_review_merge'] = $sum1_1;

unset($sum1_1);




$sum1_2 = get_sum_json('personality_score_json/none_user_merge/Rock_none_user_merge.json', $fav_game_array);

$score1_2 = score_rank('personality_score_json/none_user_merge/Rock_none_user_merge.json', $fav_game_array, $sum1_2);

$record['Rock_none_user_merge'] = $score1_2;

$average_personality_score['Rock_none_user_merge'] = $sum1_2;

unset($sum1_2);




$sum1_3 = get_sum_json('personality_score_json/review_merge/Rock_review_merge.json', $fav_game_array);

$score1_3 = score_rank('personality_score_json/review_merge/Rock_review_merge.json', $fav_game_array, $sum1_3);

$record['Rock_review_merge'] = $score1_3;

$average_personality_score['Rock_review_merge'] = $sum1_3;

unset($sum1_3);




$sum1_4 = get_sum_json('personality_score_json/user_merge/Rock_user_merge.json', $fav_game_array);

$score1_4 = score_rank('personality_score_json/user_merge/Rock_user_merge.json', $fav_game_array, $sum1_4);

$record['Rock_user_merge'] = $score1_4;

$average_personality_score['Rock_user_merge'] = $sum1_4;

unset($sum1_4);





// 馬瑞斯法
$sum2_1 = get_sum_json('personality_score_json/none_review_merge/Mairesse_none_review_merge.json', $fav_game_array);

$score2_1 = score_rank('personality_score_json/none_review_merge/Mairesse_none_review_merge.json', $fav_game_array, $sum2_1);

$record['Mairesse_none_review_merge'] = $score2_1;

$average_personality_score['Mairesse_none_review_merge'] = $sum2_1;

unset($sum2_1);




$sum2_2 = get_sum_json('personality_score_json/none_user_merge/Mairesse_none_user_merge.json', $fav_game_array);

$score2_2 = score_rank('personality_score_json/none_user_merge/Mairesse_none_user_merge.json', $fav_game_array, $sum2_2);

$record['Mairesse_none_user_merge'] = $score2_2;

$average_personality_score['Mairesse_none_user_merge'] = $sum2_2;

unset($sum2_2);



$sum2_3 = get_sum_json('personality_score_json/review_merge/Mairesse_review_merge.json', $fav_game_array);

$score2_3 = score_rank('personality_score_json/review_merge/Mairesse_review_merge.json', $fav_game_array, $sum2_3);

$record['Mairesse_review_merge'] = $score2_3;

$average_personality_score['Mairesse_review_merge'] = $sum2_3;

unset($sum2_3);



$sum2_4 = get_sum_json('personality_score_json/user_merge/Mairesse_user_merge.json', $fav_game_array);

$score2_4 = score_rank('personality_score_json/user_merge/Mairesse_user_merge.json', $fav_game_array, $sum2_4);

$record['Mairesse_user_merge'] = $score2_4;

$average_personality_score['Mairesse_user_merge'] = $sum2_4;

unset($sum2_4);





// 交大法
$sum3_1 = get_sum_json('personality_score_json/none_review_merge/Chang_none_review_merge.json', $fav_game_array);

$score3_1 = score_rank('personality_score_json/none_review_merge/Chang_none_review_merge.json', $fav_game_array, $sum3_1);

$record['Chang_none_review_merge'] = $score3_1;

$average_personality_score['Chang_none_review_merge'] = $sum3_1;

unset($sum3_1);



$sum3_2 = get_sum_json('personality_score_json/none_user_merge/Chang_none_user_merge.json', $fav_game_array);

$score3_2 = score_rank('personality_score_json/none_user_merge/Chang_none_user_merge.json', $fav_game_array, $sum3_2);

$record['Chang_none_user_merge'] = $score3_2;

$average_personality_score['Chang_none_user_merge'] = $sum3_2;

unset($sum3_2);



$sum3_3 = get_sum_json('personality_score_json/review_merge/Chang_review_merge.json', $fav_game_array);

$score3_3 = score_rank('personality_score_json/review_merge/Chang_review_merge.json', $fav_game_array, $sum3_3);

$record['Chang_review_merge'] = $score3_3;

$average_personality_score['Chang_review_merge'] = $sum3_3;

unset($sum3_3);




$sum3_4 = get_sum_json('personality_score_json/user_merge/Chang_user_merge.json', $fav_game_array);

$score3_4 = score_rank('personality_score_json/user_merge/Chang_user_merge.json', $fav_game_array, $sum3_4);

$record['Chang_user_merge'] = $score3_4;

$average_personality_score['Chang_user_merge'] = $sum3_4;


unset($sum3_4);

// 將12種結果之所選遊戲之平均人格分數寫入json檔
$record['average_personality_score'] = $average_personality_score;

unset($average_personality_score);


// 將結果寫入json檔並輸出
if (write_json_file($user_id, 'record', $record)) {


  $set_test1_finish_query = "UPDATE user_account_table SET test1_finish = 1 WHERE user_id = '" .$user_id. "'";


 mysqli_query($conn,$set_test1_finish_query);


if (mysqli_affected_rows($conn) == 1) {

   

} else {

   echo '受測結果數據紀錄檔案發生錯誤';

}
   

	

}else{


echo '受測結果數據紀錄檔案發生錯誤';



}



// 釋放記憶體
unset($record);

// 釋放記憶體
unset($score1_1);
unset($score1_2);
unset($score1_3);
unset($score1_4);
unset($score2_1);
unset($score2_2);
unset($score2_3);
unset($score2_4);
unset($score3_1);
unset($score3_2);
unset($score3_3);
unset($score3_4);










}else{



echo '受測結果數據紀錄檔案發生錯誤';




}














?>