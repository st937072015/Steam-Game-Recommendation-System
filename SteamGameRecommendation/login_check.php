<?php 

require_once("mysql_con.php");

// 驗證登入表單填寫狀況
if ($_POST['lo_username'] == null && !$_POST['lo_password'] == null) {
	
echo 'username_empty';


}else if ($_POST['lo_password'] == null && !$_POST['lo_username'] == null) {
	

echo 'password_empty';


}else if ($_POST['lo_username']  == null && $_POST['lo_password']  == null ) {

echo 'all_empty';

}else if(!$_POST['lo_username']  == null && !$_POST['lo_password']  == null ){
	

session_start();


// 取得登入者資訊

// 預防SQL Injection
$username = mysqli_real_escape_string($conn, $_POST['lo_username']);

$password = mysqli_real_escape_string($conn, md5($_POST['lo_password']));


$login_query = "SELECT username, password, level ,nickname FROM user_account_table WHERE username = '$username' AND password = '$password'";

$result_data = mysqli_query($conn, $login_query);

$result_num = mysqli_num_rows($result_data);

$row = mysqli_fetch_array($result_data);


// 驗證帳號是否存在且合法
if ($result_num == 1 && $row['username'] == $_POST['lo_username'] && $row['password'] == md5($_POST['lo_password'])) {

	$_SESSION['username'] = $row['username'];

    $_SESSION['level'] = $row['level'];

    $_SESSION['nickname'] = $row['nickname'];

	echo 'pass';

}else{



echo 'account_error';


}







}













?>