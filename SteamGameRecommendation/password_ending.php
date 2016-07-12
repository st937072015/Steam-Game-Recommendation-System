<?php  

require_once("mysql_con.php");

session_start();


//預防SQL Injection
$reset_password = mysqli_real_escape_string($conn,$_POST['reset_check_password']);


// 密碼重置情況
if ($_POST['reset_check_password'] == null) {

echo 'new_password_empty';
	
}else if (isset($_POST['reset_check_password']) && isset($_SESSION['reset_key'])) {



$set_password_query = "UPDATE user_account_table SET password = '" .md5($reset_password). "', pass_reset = '無' WHERE pass_reset = '" .$_SESSION['reset_key']. "'";


mysqli_query($conn,$set_password_query);


if (mysqli_affected_rows($conn) == 1) {

   echo 'new_password_set_success';

} else {

   echo 'new_password_set_fail';

}








	
}else{

echo 'illegal';







}









?>