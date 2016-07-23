<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
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

    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/search.js"></script>
    <script src="js/featherlight.min.js"></script>
   

</head>
<body>
<?php 
require_once("header.php");
?>

<div class="container">



<!-- 標籤雲區塊 -->
<div id="see-tag-cloud" class="lightbox">



<?php  

$game_tag_query = "SELECT DISTINCT tag_name FROM game_tag_table";

$game_tag_result = mysqli_query($conn, $game_tag_query);





// 輸出遊戲屬性標籤雲
while ($row = mysqli_fetch_array($game_tag_result)) {


echo '<div class="tag-page-style small-card-background featherlight-close"><a href="javascript:void(0)" onclick="tag_page(\'' . addslashes($row['tag_name']) . '\')">' . $row['tag_name'] . '</a></div>';



}


?>
	
</div>





<div class="row">
<div class="span12">

<div class="hero-unit">
<center>
<h1>Steam遊戲搜尋</h1>
<form id="search-form">
<div class="row">
<input id="game-search" type="text" name="game_search">
</div>
<div class="row">
<button id="see-all-game" class="btn btn-large btn-inverse"><i class="fa fa-search"></i>看全部遊戲</button>
</div>
<div class="row">
<button class="btn btn-large btn-inverse" data-featherlight="#see-tag-cloud"><i class="fa fa-search"></i>選擇標籤雲</button>
</div>
</form>
</center>


   </div>


	</div>
     </div>



<center class="loading"><i class="fa fa-spinner fa-spin fa-5x"></i></center>
<div id="search-output">


		</div> <!-- search-output -->
		

	</div> <!-- /container -->

</body>
</html>