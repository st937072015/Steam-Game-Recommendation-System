<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("step1_test_function.php");


//if (isset($_POST['start_test1']) && count($_SESSION['fav_cart']) > 0) {
	
$fav_game_array = $_SESSION['fav_cart'];




$sum = get_sum_json('personality_score_json/a.json', $fav_game_array);






print_r(score_rank('personality_score_json/a.json', $fav_game_array, $sum));



































//}











?>