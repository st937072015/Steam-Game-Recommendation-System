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




// 取得登入者資訊
$login_query = "SELECT username, password FROM user_table";

$result_data = mysqli_query($conn, $login_query);

$result_num = mysqli_num_rows($result_data);

$row = mysqli_fetch_array($result_data);


// 驗證帳號是否已註冊
if ($result_num == 1 && $row['username'] == $_POST['lo_username'] && $row['password'] == $_POST['lo_password']) {

	echo 'pass';

}else{



echo 'account_error';


}







}













?>