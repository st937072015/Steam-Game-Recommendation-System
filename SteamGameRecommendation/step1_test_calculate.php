<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("step1_test_function.php");


//if (isset($_POST['start_test1']) && count($_SESSION['fav_cart']) > 0) {
	
$fav_game_array = $_SESSION['fav_cart'];




print_r(get_sum_json('json/a/c.json', $fav_game_array));













































//}











?>