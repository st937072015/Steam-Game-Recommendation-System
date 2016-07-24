<?php 
require_once "mysql_con.php";

// 加入遊戲之功能<-------------------------------------------------------------------------------->
if (isset($_POST['add_game']) && $_POST['add_game'] != null && !isset($_POST['remove_game'])) {


$game_add = mysqli_real_escape_string($conn,$_POST['add_game']);


$game_add_query = "SELECT game_appid,gamename FROM game_schema_table WHERE game_appid = '".$game_add."'";


$game_add_result = mysqli_query($conn,$game_add_query);

$game_add_result_num = mysqli_num_rows($game_add_result);

$row = mysqli_fetch_assoc($game_add_result);




// 判斷傳來的遊戲資料是否為資料庫中的(安全性)
if ($game_add_result_num == 1) {

	session_start();
  
  // 已加入之遊戲總數量
  $count = count($_SESSION['fav_cart']);



   // 判別$_SESSION['fav_cart']是否已有初始化
   if (!isset($_SESSION['fav_cart']) || $count == 0) {

   	 $_SESSION['fav_cart'] = array();

   	 $_SESSION['fav_cart'][$row['gamename']] = $row['game_appid'];

     echo 'success';


   }else{
      
     // 判斷是否超過數量門檻上限
     if ($count == 10) {
     	
      echo 'overload';

     }
    // 檢查遊戲是否已有重複加入過
    else if (array_key_exists($row['gamename'], $_SESSION['fav_cart'])) {

    	echo 'fail';

    }else{

       $_SESSION['fav_cart'][$row['gamename']] = $row['game_appid'];

       echo 'success';
        

    }


   }

  





}else{

 echo '
  <div class="info">
    <h1>請勿從事非法活動，謝謝。</h1>
  </div>
</div>

<div class="form">
  
<img src="img/notify/warning.png" height="250" width="300">

</div>';






}








}
// 移除遊戲之功能<-------------------------------------------------------------------------------->
else if (isset($_POST['remove_game']) && $_POST['remove_game'] != null && !isset($_POST['add_game'])) {
	


$game_remove = mysqli_real_escape_string($conn,$_POST['remove_game']);


$game_remove_query = "SELECT game_appid,gamename FROM game_schema_table WHERE game_appid = '".$game_remove."'";


$game_remove_result = mysqli_query($conn,$game_remove_query);

$game_remove_result_num = mysqli_num_rows($game_remove_result);

$row = mysqli_fetch_assoc($game_remove_result);








// 判斷傳來的遊戲資料是否為資料庫中的(安全性)
if ($game_remove_result_num == 1) {

	session_start();
   
  // 已加入之遊戲總數量
  $count = count($_SESSION['fav_cart']);


  if ($count > 0) {
  	
  unset($_SESSION['fav_cart'][$row['gamename']]);
  
  echo 'remove success';

  }else{

  
  echo 'remove fail';


  }







}else{




echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">Unfortunately, 請問從事非法活動，謝謝!</h1></center>';






}










}else{





echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">Unfortunately, 請問從事非法活動，謝謝!</h1></center>';






}




 ?>