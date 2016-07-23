<?php
require_once "mysql_con.php";
require_once "CosineSimilarity.php";

$cs = new CosineSimilarity();


$game_result1 = mysqli_query($conn,"SELECT game_appid, rock_none_review_merge FROM none_review_merge WHERE game_appid = 10");

$row1 =  mysqli_fetch_assoc($game_result1);

$vector1 = json_decode($row1['rock_none_review_merge'], true);


$game_result2 = mysqli_query($conn,"SELECT game_appid, rock_none_review_merge FROM none_review_merge WHERE game_appid != 10");


$data = array();

while ($row2 =  mysqli_fetch_array($game_result2)) {
	






     $data[$row2['game_appid']] = $cs ->similarity($vector1,json_decode($row2['rock_none_review_merge'], true));
     


}

arsort($data);

foreach ($data as $appid => $score) {
	

echo "$appid =  $score"."<br>";



}

/*
echo var_dump($vector2).'<br>';

$cs = new CosineSimilarity();

$re1 = $cs ->similarity($vector1,$vector2);

echo $re1;

*/

?>