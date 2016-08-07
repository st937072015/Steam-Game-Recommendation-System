<?php 
require_once "lib/CosineSimilarity.php";

// 算出受測者所選遊戲之平均分數陣列向量
function get_sum_json($file_path, $fav_game_array){

// 總合平均向量
$sum = array();

// 遊戲清單遊戲總數量
$count = count($fav_game_array);

// 取得json分數檔案內容
$json_file_get = file_get_contents($file_path);

$json_parse = json_decode($json_file_get, true);




// 進行總相加
foreach ($fav_game_array as $value1) {
  
  // 將相加目標向量取出
  $temp = $json_parse[$value1];

// 進行分數累加
foreach ($temp as $key2 => $value2) {
	

  $sum[$key2] = $sum[$key2] + $temp[$key2];


}

}


// 進行總平均
foreach ($sum as $key => $value) {
	

  $sum[$key] = $sum[$key] / $count;
     

}

// 釋放已經用不到的json資料以節省記憶體
unset($json_file_get);
unset($json_parse);


// 最後回傳計算結果向量
return	$sum;

}







// 計算排行分數 利用餘弦相似度lib
function score_rank($file_path, $fav_game_array, $sum){

// 存放總推薦分數排行之向量
$total_rank = array();

// 存放只取前10名之推薦分數排行之向量
$ten_rank = array();

// 呼叫cosine計算相似度之物件
$cs = new CosineSimilarity();


// 取得json檔案分數內容
$json_file_get = file_get_contents($file_path);

$json_parse = json_decode($json_file_get, true);



// 進行相似度計算
foreach ($json_parse as $key => $value) {

	
    // 判斷是否已經為受測者所挑選過的遊戲了
   if (!in_array($key, $fav_game_array)) {


// 比對向量相似度分數
$cs_score = $cs ->similarity($sum, $json_parse[$key]);


// 放入分數至總推薦分數排行之array中
$total_rank[$key] = $cs_score;

   }



}



// 先釋放已經用不到的json資料以節省記憶體
unset($json_file_get);
unset($json_parse);




// 將存放總推薦分數排行之向量進行排序由高到低(使用arsort以保持原來的index key值)
arsort($total_rank);



// 將前10名分數放入只取前10名之推薦分數排行之向量array中
$score_count = 0;

foreach ($total_rank as $key => $value) {


$ten_rank[$key] = $total_rank[$key];



$score_count++;

// 存放到第10名後就中斷
if ($score_count == 10) {

	break;

}

	
}

// 釋放最後已經用不到的資料以節省記憶體
unset($total_rank);




return $ten_rank;


}












// 計算排行分數 利用餘弦相似度lib
function score_rank_for_only_tag($personality_file_path, $only_tag_file_path, $fav_game_array, $sum_personlity, $sum_tag){

// 存放人格特質總分數排行之向量
$total_rank_personality = array();



// 存放屬性標籤總分數排行之向量
$total_rank_tag = array();


// 存放只取前10名之推薦分數排行之向量
$ten_rank = array();



// 呼叫cosine計算相似度之物件
$cs = new CosineSimilarity();


// 取得人格特質json檔案分數內容
$json_file_get = file_get_contents($personality_file_path);

$json_parse = json_decode($json_file_get, true);



// 進行相似度計算(人格特質)
foreach ($json_parse as $key => $value) {

  
    // 判斷是否已經為受測者所挑選過的遊戲了
   if (!in_array($key, $fav_game_array)) {


// 比對向量相似度分數
$cs_score = $cs ->similarity($sum_personlity, $json_parse[$key]);


// 放入分數至總推薦分數排行之array中
$total_rank_personality[$key] = $cs_score;

   }



}


// 先釋放已經用不到的json資料以節省記憶體
unset($json_file_get);
unset($json_parse);






// 取得遊戲標籤json檔案分數內容
$json_file_get = file_get_contents($only_tag_file_path);


$json_parse = json_decode($json_file_get, true);



// 進行相似度計算
foreach ($json_parse as $key => $value) {

  
    // 判斷是否已經為受測者所挑選過的遊戲了
   if (!in_array($key, $fav_game_array)) {


// 比對向量相似度分數
$cs_score = $cs ->similarity($sum_tag, $json_parse[$key]);


// 放入分數至總推薦分數排行之array中
$total_rank_tag[$key] = $cs_score;

   }



}


// 先釋放已經用不到的json資料以節省記憶體
unset($json_file_get);
unset($json_parse);




// 將兩個邊的相似度分數分別成以0.5後再相加起來
$tag_merge_score = array();


foreach ($total_rank_personality as $key => $value) {
  


$tag_merge_score[$key] = ($total_rank_personality[$key] * 0.5) + ($total_rank_tag[$key] * 0.5);





}



// 先釋放已經用不到的json資料以節省記憶體
unset($total_rank_personality);
unset($total_rank_tag);










// 將存放總推薦分數排行之向量進行排序由高到低(使用arsort以保持原來的index key值)
arsort($tag_merge_score);



// 將前10名分數放入只取前10名之推薦分數排行之向量array中
$score_count = 0;

foreach ($tag_merge_score as $key => $value) {


$ten_rank[$key] = $tag_merge_score[$key];



$score_count++;

// 存放到第10名後就中斷
if ($score_count == 10) {

  break;

}

  
}

// 釋放最後已經用不到的資料以節省記憶體
unset($tag_merge_score);




return $ten_rank;


}























?>