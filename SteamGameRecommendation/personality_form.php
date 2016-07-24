<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("test_status.php");
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
	<link rel="stylesheet" href="css/sweetalert.css">

    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/personality_form_upload.js"></script>
   

</head>
<body>
<?php 
require_once("header.php");
?>
<div class="container">

<div class="st-loader"><span class="equal"><center><h3>上傳中</h3></center></span></div>


<div id="upload-status">

<?php 



$user_id = $_SESSION['user_id'];


$row = test_finish_status($user_id, $conn);



if ($row['personality_form_finish'] != 1) {
	
echo '<div id = "personality-test-section" class="row">
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
     </div>';



}else{





echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您的人格特質心理測驗已經完成並上傳過結果囉!</h1></center>';



}





 ?>


</div>

	</div> <!-- /container -->

</body>
</html>