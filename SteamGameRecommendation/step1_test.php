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
	<link rel="stylesheet" href="css/sweetalert.css">

    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/search.js"></script>
    <script src="js/featherlight.min.js"></script>
    <script src="js/sweetalert.min.js"></script>


   

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
<h1>您的有興趣之遊戲清單總目前遊戲總數如下</h1>

<form id="search-form">
<div class="row">

</div>
</form>
</center>


   </div>


	</div>
     </div>



<center class="loading"><i class="fa fa-spinner fa-spin fa-5x"></i></center>
<div id="test1-output">
<?php 

$count = count($_SESSION['fav_cart']);



if ($count > 0) {


echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您目前一共挑了'.$count.'款遊戲，恭喜您已經具有進行受測階段1的資格囉!</h1></center>';
	
}else{
	

echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您的有興趣之遊戲清單目前還是空的，趕快挑選您覺得有興趣的遊戲吧！</h1></center>';


}

 ?>	</div> <!-- test1-output -->
		

	</div> <!-- /container -->

</body>
</html>