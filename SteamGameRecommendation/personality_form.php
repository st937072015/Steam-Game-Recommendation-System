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
    <script src="js/featherlight.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/game_remove.js"></script>
    <script src="js/personality_form_upload.js"></script>
   

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
<h1>以下為人格特質心理測驗網址</h1>
<a class="steam-index" href="http://meetype.com/bigfive-test" target="_blank"><h2>開始心理測驗</h2></a>

<form id="upload_personality_form" method="post" enctype="multipart/form-data">


<div class="row">
<div class="span12">
<input type="file" name="file" id="file" required />
</div>
</div>


<button type="submit" class="btn btn-large btn-inverse"><i class="fa fa-cloud-upload"></i> 上傳心理測驗結果</button>




</form>


</center>


   </div>


	</div>
     </div>


<center class="loading"><i class="fa fa-spinner fa-spin fa-5x"></i></center>
<div id="upload-status">
	</div> <!-- /container -->

</body>
</html>