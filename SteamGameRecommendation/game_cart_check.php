<?php 
require_once "mysql_con.php";


if (isset($_POST['add_game']) && $_POST['add_game'] != null) {



$game_add = mysqli_real_escape_string($conn,$_POST['add_game']);


$game_add_query = "SELECT game_appid,gamename FROM game_schema_table WHERE game_appid = '".$game_add."'";


$game_add_result = mysqli_query($conn,$game_add_query);

$game_add_result_num = mysqli_num_rows($game_add_result);

$row = mysqli_fetch_assoc($game_add_result);



// 判斷傳來的遊戲資料是否為資料庫中的(安全性)
if ($game_add_result_num == 1) {

	session_start();



   // 判別$_SESSION['fav_cart']是否已有初始化
   if (!isset($_SESSION['fav_cart']) || count($_SESSION['fav_cart']) == 0) {

   	 $_SESSION['fav_cart'] = array();

   	 $_SESSION['fav_cart'][$row['gamename']] = $row['game_appid'];

     echo 'success';


   }else{



    // 檢查遊戲是否已有重複加入過
    if (array_key_exists($row['gamename'], $_SESSION['fav_cart'])) {

    	echo 'fail';

    }else if(){

     
        

    }else{

       $_SESSION['fav_cart'][$row['gamename']] = $row['game_appid'];

       echo 'success';
        

    }


   }

  





}








}else{



 echo '<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Steam Game Recommendation System</title>
    
    
<link rel="stylesheet" href="css/login_reset.css">
<link rel="stylesheet" href="css/login_style.css">
<link rel="stylesheet" href="css/notify_style.css">



<script src="js/jquery-3.0.0.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>


</head>


  <body>
  <div class="container">
  <div class="info">
    <h1>請勿從事非法活動，謝謝。</h1>
  </div>
</div>

<div class="form">
  
<img src="img/notify/warning.png" height="250" width="300">

</div>
  </body>
</html>';




}




 ?>