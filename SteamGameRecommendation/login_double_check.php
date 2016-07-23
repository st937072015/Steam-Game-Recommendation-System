<?php  

session_start();

$username = mysqli_real_escape_string($conn, $_SESSION['username']);

$level = mysqli_real_escape_string($conn, $_SESSION['level']);

$nickname = mysqli_real_escape_string($conn, $_SESSION['nickname']);

// 驗證登入者資訊

// '".$_SESSION['username']."'
$login_query = "SELECT username, level, nickname, personality_form_finish, good_or_bad1, test1_finish FROM user_account_table WHERE username = '$username' AND level = '$level' AND nickname = '$nickname'";

$result_data = mysqli_query($conn, $login_query);

$row = mysqli_fetch_assoc($result_data);

$result_num = mysqli_num_rows($result_data);


if (!isset($_SESSION['level']) || ($_SESSION['level'] != "標準Steam玩家"  && $_SESSION['level'] != "一般玩家") || !isset($_SESSION['username']) || $result_num != 1 || !isset($_SESSION['level']) || $_SESSION['level'] == null || $_SESSION['username'] == null || !isset($_SESSION['nickname'])|| $_SESSION['nickname'] == null) {


  echo "<!DOCTYPE html>
<html >
  <head>
    <meta charset='UTF-8'>
    <title>Steam Game Recommendation System</title>
    
    
<link rel='stylesheet' href='css/login_reset.css'>
<link rel='stylesheet' href='css/login_style.css'>
<link rel='stylesheet' href='css/notify_style.css'>



<script src='js/jquery-3.0.0.js'></script>
<script src='js/jquery-migrate-3.0.0.js'></script>


</head>


  <body>
  <div class='container'>
  <div class='info'>
    <h1>很可惜地，您的權限不足。</h1>
  </div>
</div>

<div class='form'>
  
<img src='img/notify/warning.png' height='250' width='300'>

</div>
  </body>
</html>";

 header('Location: index.php'); 

 exit;

}else{

//echo '<script type="text/javascript">alert("授權進入!");</script>';



}


// 驗證受測者目前受測狀態
if ($row['personality_form_finish'] == 1) {

  echo "<!DOCTYPE html>
<html >
  <head>
    <meta charset='UTF-8'>
    <title>Steam Game Recommendation System</title>
    
    
<link rel='stylesheet' href='css/login_reset.css'>
<link rel='stylesheet' href='css/login_style.css'>
<link rel='stylesheet' href='css/notify_style.css'>



<script src='js/jquery-3.0.0.js'></script>
<script src='js/jquery-migrate-3.0.0.js'></script>


</head>


  <body>
  <div class='container'>
  <div class='info'>
    <h1>您的人格特質心理測驗，已經填完過囉。</h1>
  </div>
</div>

<div class='form'>
  
<img src='img/notify/warning.png' height='250' width='300'>

</div>
  </body>
</html>";




}elseif ($row['good_or_bad1'] == 1) {


    echo "<!DOCTYPE html>
<html >
  <head>
    <meta charset='UTF-8'>
    <title>Steam Game Recommendation System</title>
    
    
<link rel='stylesheet' href='css/login_reset.css'>
<link rel='stylesheet' href='css/login_style.css'>
<link rel='stylesheet' href='css/notify_style.css'>



<script src='js/jquery-3.0.0.js'></script>
<script src='js/jquery-migrate-3.0.0.js'></script>


</head>


  <body>
  <div class='container'>
  <div class='info'>
    <h1>您的Steam遊戲推薦系統推薦滿意度，已經填完過囉。</h1>
  </div>
</div>

<div class='form'>
  
<img src='img/notify/warning.png' height='250' width='300'>

</div>
  </body>
</html>";
  



}elseif ($row['test1_finish'] == 1) {
  

    echo "<!DOCTYPE html>
<html >
  <head>
    <meta charset='UTF-8'>
    <title>Steam Game Recommendation System</title>
    
    
<link rel='stylesheet' href='css/login_reset.css'>
<link rel='stylesheet' href='css/login_style.css'>
<link rel='stylesheet' href='css/notify_style.css'>



<script src='js/jquery-3.0.0.js'></script>
<script src='js/jquery-migrate-3.0.0.js'></script>


</head>


  <body>
  <div class='container'>
  <div class='info'>
    <h1>您的Steam遊戲推薦系統推薦測驗第一階段，已經完成過囉。</h1>
  </div>
</div>

<div class='form'>
  
<img src='img/notify/warning.png' height='250' width='300'>

</div>
  </body>
</html>";




}












?>