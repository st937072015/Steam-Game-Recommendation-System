<?php  
require_once("mysql_con.php");

session_start();


// 驗證登入者資訊
$login_query = "SELECT username, password, level FROM user_table WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."' AND level = '".$_SESSION['level']."'";

$result_data = mysqli_query($conn, $login_query);

$result_num = mysqli_num_rows($result_data);


if (!isset($_SESSION['level']) || !$_SESSION['level'] == "標準Steam玩家" || !isset($_SESSION['username']) || !isset($_SESSION['password']) || !$result_num == 1) {

 echo '很可惜地，您的權限不足';

 header('Location: index.php'); 

 exit;

}else{

echo '<script type="text/javascript">alert("授權進入!");</script>';


exit;

}


?>