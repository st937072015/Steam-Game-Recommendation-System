<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("step1_test_function.php");
require_once("upload_file_function.php");
require_once("json_write_file_function.php");


if (isset($_POST['start_test1']) && count($_SESSION['fav_cart']) > 0) {
	
$fav_game_array = $_SESSION['fav_cart'];

$user_id = $_SESSION['user_id'];

// 儲存所有計算排行結果
$record = array();


// 儲存受測者所挑選之遊戲
$record['select_game'] = array_flip($fav_game_array);

// 檢查受測者儲存受測資料的資料夾是否存在了
folder_check($user_id);


// 本研究的Rock法
$sum1_1 = get_sum_json('personality_score_json/none_review_merge/Rock_none_review_merge.json', $fav_game_array);

$score1_1 = score_rank('personality_score_json/none_review_merge/Rock_none_review_merge.json', $fav_game_array, $sum1_1);

$record['Rock_none_review_merge'] = $score1_1;

print_r($score1_1);

echo '<br>';

unset($sum1_1);
unset($score1_1);



$sum1_2 = get_sum_json('personality_score_json/none_user_merge/Rock_none_user_merge.json', $fav_game_array);

$score1_2 = score_rank('personality_score_json/none_user_merge/Rock_none_user_merge.json', $fav_game_array, $sum1_2);

$record['Rock_none_user_merge'] = $score1_2;

print_r($score1_2);

echo '<br>';

unset($sum1_2);
unset($score1_2);



$sum1_3 = get_sum_json('personality_score_json/review_merge/Rock_review_merge.json', $fav_game_array);

$score1_3 = score_rank('personality_score_json/review_merge/Rock_review_merge.json', $fav_game_array, $sum1_3);

$record['Rock_review_merge'] = $score1_3;

print_r($score1_3);

echo '<br>';

unset($sum1_3);
unset($score1_3);



$sum1_4 = get_sum_json('personality_score_json/user_merge/Rock_user_merge.json', $fav_game_array);

$score1_4 = score_rank('personality_score_json/user_merge/Rock_user_merge.json', $fav_game_array, $sum1_4);

$record['Rock_user_merge'] = $score1_4;

print_r($score1_4);

echo '<br>';

unset($sum1_4);
unset($score1_4);




// 馬瑞斯法
$sum2_1 = get_sum_json('personality_score_json/none_review_merge/Mairesse_none_review_merge.json', $fav_game_array);

$score2_1 = score_rank('personality_score_json/none_review_merge/Mairesse_none_review_merge.json', $fav_game_array, $sum2_1);

$record['Mairesse_none_review_merge'] = $score2_1;

print_r($score2_1);

echo '<br>';

unset($sum2_1);
unset($score2_1);



$sum2_2 = get_sum_json('personality_score_json/none_user_merge/Mairesse_none_user_merge.json', $fav_game_array);

$score2_2 = score_rank('personality_score_json/none_user_merge/Mairesse_none_user_merge.json', $fav_game_array, $sum2_2);

$record['Mairesse_none_user_merge'] = $score2_2;

print_r($score2_2);

echo '<br>';

unset($sum2_2);
unset($score2_2);


$sum2_3 = get_sum_json('personality_score_json/review_merge/Mairesse_review_merge.json', $fav_game_array);

$score2_3 = score_rank('personality_score_json/review_merge/Mairesse_review_merge.json', $fav_game_array, $sum2_3);

$record['Mairesse_review_merge'] = $score2_3;

print_r($score2_3);

echo '<br>';

unset($sum2_3);
unset($score2_3);


$sum2_4 = get_sum_json('personality_score_json/user_merge/Mairesse_user_merge.json', $fav_game_array);

$score2_4 = score_rank('personality_score_json/user_merge/Mairesse_user_merge.json', $fav_game_array, $sum2_4);

$record['Mairesse_user_merge'] = $score2_4;

print_r($score2_4);

echo '<br>';

unset($sum2_4);
unset($score2_4);




// 交大法
$sum3_1 = get_sum_json('personality_score_json/none_review_merge/Chang_none_review_merge.json', $fav_game_array);

$score3_1 = score_rank('personality_score_json/none_review_merge/Chang_none_review_merge.json', $fav_game_array, $sum3_1);

$record['Chang_none_review_merge'] = $score3_1;

print_r($score3_1);

echo '<br>';

unset($sum3_1);
unset($score3_1);


$sum3_2 = get_sum_json('personality_score_json/none_user_merge/Chang_none_user_merge.json', $fav_game_array);

$score3_2 = score_rank('personality_score_json/none_user_merge/Chang_none_user_merge.json', $fav_game_array, $sum3_2);

$record['Chang_none_user_merge'] = $score3_2;

print_r($score3_2);

echo '<br>';

unset($sum3_2);
unset($score3_2);


$sum3_3 = get_sum_json('personality_score_json/review_merge/Chang_review_merge.json', $fav_game_array);

$score3_3 = score_rank('personality_score_json/review_merge/Chang_review_merge.json', $fav_game_array, $sum3_3);

$record['Chang_review_merge'] = $score3_3;

print_r($score3_3);

echo '<br>';

unset($sum3_3);
unset($score3_3);



$sum3_4 = get_sum_json('personality_score_json/user_merge/Chang_user_merge.json', $fav_game_array);

$score3_4 = score_rank('personality_score_json/user_merge/Chang_user_merge.json', $fav_game_array, $sum3_4);

$record['Chang_user_merge'] = $score3_4;

print_r($score3_4);

echo '<br>';

unset($sum3_4);
unset($score3_4);



// 將結果寫入json檔並輸出
if (write_json_file($user_id, 'record_', $record) != true) {

	echo '寫入錯誤';

}



















}











?>