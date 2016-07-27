<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("test_status.php");



$user_id = $_SESSION['user_id'];


$row = test_finish_status($user_id, $conn);
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
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/percircle.css">

    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/percircle.js"></script>
      

</head>
<body>
<?php 
require_once("header.php");
?>
<div class="container">


<?php 



$user_id = $_SESSION['user_id'];


$row = test_finish_status($user_id, $conn);






$status_percent = 0;

if ($row['personality_form_finish'] == 1) {
	$status_percent = $status_percent + 25;

}

if ($row['test1_finish'] == 1) {
	$status_percent = $status_percent + 25;

}

if ($row['good_or_bad1'] == 1) {
	$status_percent = $status_percent + 25;

}

if ($row['txt_upload'] == 1) {
	$status_percent = $status_percent + 25;

}










 ?>


<div id = "test-status-section" class="row">
<div class="span12">

<div class="hero-unit" style="text-align:center;"">

 <center>
 <h1>受測階段1進度</h1>
<div class="c100 p77 dark big">
  <span><?php echo $status_percent.'%'; ?></span>
  <div class="slice">
      <div class="bar"></div>
      <div class="fill"></div>
  </div>
</div>



<?php 

if ($row['personality_form_finish'] == 1) {
	echo '<h2><i class="fa fa-flag-checkered"></i> 人格特質心理測驗結果圖片上傳 <i class="fa fa-check" style="color:#33cc33;"></i></h2>';

}else{echo '<h2><i class="fa fa-flag-checkered"></i> 人格特質心理測驗結果圖片上傳 <i class="fa fa-times" style="color:#c02121;"></i></h2>';}

if ($row['test1_finish'] == 1) {
	echo '<h2><i class="fa fa-flag-checkered"></i> 受測階段1推薦計算測驗結果&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-check" style="color:#33cc33;"></i></h2>';

}else{echo '<h2><i class="fa fa-flag-checkered"></i> 受測階段1推薦計算測驗結果&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-times" style="color:#c02121;"></i></h2>';}

if ($row['good_or_bad1'] == 1) {
	echo '<h2><i class="fa fa-flag-checkered"></i> 受測階段1推薦結果給予評分&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-check" style="color:#33cc33;"></i></h2>';

}else{echo '<h2><i class="fa fa-flag-checkered"></i> 受測階段1推薦結果給予評分&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-times" style="color:#c02121;"></i></h2>';}

if ($row['txt_upload'] == 1) {
	echo '<h2><i class="fa fa-flag-checkered"></i> 受測階段2文字txt檔案上傳&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-check" style="color:#33cc33;"></i></h2>';

}else{echo '<h2><i class="fa fa-flag-checkered"></i> 受測階段2文字txt檔案上傳&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-times" style="color:#c02121;"></i></h2>';}



echo '<h2><i class="fa fa-flag-checkered"></i> 受測階段2推薦計算測驗結果&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times" style="color:#c02121;"></i></h2>';

echo '<h2><i class="fa fa-flag-checkered"></i> 受測階段2推薦結果給予評分&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times" style="color:#c02121;"></i></h2>';

?>


<div class="animated flipInX">
				<div class="thumbnail small-card-background">
					<img src="img/notify/gift_coupon.jpg">
					<div class="caption">
						<h3>受測完成獎勵</h3>
						<h3>家樂福200元禮券</h3>
					</div>
				</div>
			</div>


</center>


   </div>


	</div>
     </div>;

















	</div> <!-- /container -->

</body>
</html>