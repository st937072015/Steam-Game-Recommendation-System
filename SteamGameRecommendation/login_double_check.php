<?php  
require_once("mysql_con.php");

session_start();

$username = mysqli_real_escape_string($conn, $_SESSION['username']);

$level = mysqli_real_escape_string($conn, $_SESSION['level']);

// 驗證登入者資訊

// '".$_SESSION['username']."'
$login_query = "SELECT username, level FROM user_table WHERE username = '$username' AND level = '$level'";

$result_data = mysqli_query($conn, $login_query);

$result_num = mysqli_num_rows($result_data);


if (!isset($_SESSION['level']) || $_SESSION['level'] != "標準Steam玩家" || !isset($_SESSION['username']) || $result_num != 1 || $_SESSION['level'] == null || $_SESSION['level'] == null || $_SESSION['username'] == null) {

 echo '很可惜地，您的權限不足';

 header('Location: index.php'); 

 exit;

}else{

//echo '<script type="text/javascript">alert("授權進入!");</script>';



}


?>