<?php 

// 算出受測者所選遊戲之平均分數陣列向量
function get_sum_json($file_path, $fav_game_array){

// 總合平均向量
$sum = array();

// 遊戲清單遊戲總數量
$count = count($fav_game_array);


$json_file_get = file_get_contents($file_path);

$json_parse = json_decode($json_file_get, true);




// 進行總相加
foreach ($fav_game_array as $value1) {

  $temp = $json_parse[$value1];


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



















?>