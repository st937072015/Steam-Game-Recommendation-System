<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");


session_start();



$count = count($_SESSION['fav_cart']);


//$game_array = array('Counter-Strike' => 10, 'Team Fortress Classic' => 20, 'Day of Defeat' => 30);

//$count = count($game_array);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap template</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/panel_toggle_switch.css">
	<link rel="stylesheet" href="css/panel_style.css">
	<link rel="stylesheet" href="css/notify_style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/featherlight.min.css">
	<link rel="stylesheet" href="css/sweetalert.css">

    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/featherlight.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/game_remove.js"></script>
   

</head>
<body>
<?php 
require_once("header.php");
?>
<div class="container">

<div class="row">
<div class="span12">

<div class="hero-unit">
<center>
<h1>以下為您所挑選的遊戲清單</h1>
</center>


   </div>


	</div>
     </div>


<center class="loading"><i class="fa fa-spinner fa-spin fa-5x"></i></center>
<div id="list-output">



<?php 

// 若已有將挑選遊戲加入了遊戲清單
if ($count > 0) {
	

$game_cart_query = "SELECT game_appid, gamename FROM game_schema_table WHERE game_appid IN (";

foreach ($_SESSION['fav_cart'] as $key => $value) {



$game_cart_query = $game_cart_query.$value.',';



}

$game_cart_query = substr($game_cart_query,0,strlen($game_cart_query)-1); 

$game_cart_query = $game_cart_query.')';


//echo $game_cart_query;





$game_cart_result = mysqli_query($conn, $game_cart_query);

$game_cart_result_num = mysqli_num_rows($game_cart_result);

//echo $game_cart_result_num;


// 計算必須輸出的總列數
$row_layout_num = ceil($game_cart_result_num / 4);

// 計算index起始位置
$row_count = $row_layout_num;






// 輸出遊戲屬性標籤雲
  while($row_count != 0){ 

   $sql_append = $game_cart_query;


	
   // 每一列遊戲資訊所起始的index位置
   $start_index = ($row_layout_num - $row_count) * 4;

   $sql_append = $sql_append. ' LIMIT '.$start_index.',4';

   //echo $sql_append ;

   echo'<div class="row">';
   // 每一列只限制輸出4筆所查詢到的遊戲資訊
   $game_cart_result = mysqli_query($conn,$sql_append);
   while ($row = mysqli_fetch_array($game_cart_result)) {




   
   	echo 	'<div class="span3 animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/' . $row['game_appid'] . '/header.jpg">
					<div class="caption">
						<h3>' . $row['game_appid'] . '</h3>
						<h3>' . $row['gamename'] . '</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/' . $row['game_appid'] . '"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-danger" href="javascript:void(0)" onclick="game_remove(' . $row['game_appid'] . ')">從清單中刪除此遊戲</a></p>
					</div>
				</div>
			</div>';





   }
  echo '</div>';
$row_count--;
}



}else{



	echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您的有興趣之遊戲清單目前還是空的，趕快挑選您覺得有興趣的遊戲吧！</h1></center>';




}


 ?>





	</div> <!-- search-output -->

		

	</div> <!-- /container -->

</body>
</html>