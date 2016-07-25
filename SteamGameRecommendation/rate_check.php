<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("json_write_file_function.php");
require_once("check_file_function.php");

$user_id = $_SESSION['user_id'];

// 檢查傳過來是否為1~5分
if ( check_value_legal($_POST['rate1']) && check_value_legal($_POST['rate2']) && check_value_legal($_POST['rate3']) && check_value_legal($_POST['rate4']) && check_value_legal($_POST['rate5']) && check_value_legal($_POST['rate6']) && check_value_legal($_POST['rate7']) && check_value_legal($_POST['rate8']) && check_value_legal($_POST['rate9']) && check_value_legal($_POST['rate10']) && check_value_legal($_POST['rate11']) && check_value_legal($_POST['rate12'])&&
	!check_file_exist($user_id, 'rate')) {



$rate_array = array();


$rate_array['Rock_none_review_merge'] = $_POST['rate1'];

$rate_array['Rock_none_user_merge'] = $_POST['rate2'];

$rate_array['Rock_review_merge'] = $_POST['rate3'];

$rate_array['Rock_user_merge'] = $_POST['rate4'];

$rate_array['Mairesse_none_review_merge'] = $_POST['rate5'];

$rate_array['Mairesse_none_user_merge'] = $_POST['rate6'];

$rate_array['Mairesse_review_merge'] = $_POST['rate7'];

$rate_array['Mairesse_user_merge'] = $_POST['rate8'];

$rate_array['Chang_none_review_merge'] = $_POST['rate9'];

$rate_array['Chang_none_user_merge'] = $_POST['rate10'];

$rate_array['Chang_review_merge'] = $_POST['rate11'];

$rate_array['Chang_user_merge'] = $_POST['rate12'];



  // 確定已填完評分
 $set_test1_good_query = "UPDATE user_account_table SET good_or_bad1 = 1 WHERE user_id = '" .$user_id. "'";


 mysqli_query($conn,$set_test1_good_query);


if (mysqli_affected_rows($conn) == 1 && write_json_file($user_id, 'rate', $rate_array)) {

   echo'success';

} else{


  echo'fail';



}












	
}else{


echo 'fail';



}


























// 檢查傳過來是否為1~5分
function check_value_legal($rate){


if ($rate > 0 && $rate < 6) {
	

return true;


}else{


return false;


}







}





?>