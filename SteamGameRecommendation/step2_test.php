<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("test_status.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Steam Game Recommendation System</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="img/notify/favicon.ico">  
	<link rel="stylesheet" href="css/panel_toggle_switch.css">
	<link rel="stylesheet" href="css/panel_style.css">
	<link rel="stylesheet" href="css/notify_style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/sweetalert.css">

    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/step2_test.js"></script>
   

</head>
<body>
<?php 
require_once("header.php");
?>
<div class="container">

<div class="st-loader"><span class="equal"></span></div>


<div id="upload-status">

<?php 



$user_id = $_SESSION['user_id'];


$row = test_finish_status($user_id, $conn);



if ($row['txt_upload'] != 1 ) {
	
echo '<div id = "step2-test-section" class="row">
<div class="span12">

<div class="hero-unit">
<center>
<h1>請上傳5~10篇每篇至少要200個字以上自己打出來的文字txt檔案壓縮成zip檔後上傳</h1>
<form id="upload_txt_form" method="post" enctype="multipart/form-data">


<div class="row">

<input type="file" name="file" id="file"/>

</div>


<button type="submit" class="btn btn-large btn-inverse"><i class="fa fa-cloud-upload"></i> 上傳txt文字解壓縮檔</button>


</form>


</center>


   </div>


	</div>
     </div>';



}else{


echo '<div id = "step2-test-section" class="row">
<div class="span12">

<div class="hero-unit">
<center>
<h1>您的txt文字壓縮檔已經完成並上傳過結果囉!</h1>


</center>


   </div>


	</div>
     </div>';




}





 ?>

<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">受測階段2測驗功能需再擇日進行，需依受測階段1的整體進度而定受測時間。Coming Soon!</h1></center>;

</div>

	</div> <!-- /container -->

</body>
</html>