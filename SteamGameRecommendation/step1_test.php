<?php 
require_once("mysql_con.php");
require_once("login_double_check.php");
require_once("step1_test_output_function.php");
require_once("check_file_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Steam Game Recommendation System</title>

	<link rel="shortcut icon" href="img/notify/favicon.ico"> 
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/panel_toggle_switch.css">
	<link rel="stylesheet" href="css/panel_style.css">
	<link rel="stylesheet" href="css/notify_style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/sweetalert.css">
	<link rel="stylesheet" href="css/ion.tabs.css">
	<link rel="stylesheet" href="css/ion.tabs.skinFlat.css">
 
    
    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/step1_test.js"></script>
    <script src="js/ion.tabs.min.js"></script>



   

</head>
<body>
<?php 
require_once("header.php");
?>
<div class="container">




    


<div id="test1-section" class="row">
<div class="span12">

<div class="hero-unit">

<?php  
$user_id = $_SESSION['user_id'];


if (!check_file_exist($user_id, 'rate') && check_file_exist($user_id, 'record')) {


echo '<center>


<h1>非常感謝您!您的受測記錄如下，本系統的推薦結果可作為您購買遊戲的參考來源之一。拜託您請給予各個推薦結果評分!</h1>


</center>';



	
}else if(check_file_exist($user_id, 'rate') && check_file_exist($user_id, 'record')){


echo '<center>


<h1>非常感謝您!您已經完成了本研究系統受測階段一最主要的受測了!您的受測記錄如下，本系統的推薦結果可作為您購買遊戲的參考來源之一。!</h1>


</center>';





}else if(count($_SESSION['fav_cart']) == 0){


echo '<center>


<h1>您的有興趣之遊戲清單目前遊戲總數還是空的唷</h1>


<form id="test1-form">

</form>
</center>';




}else{


echo '<center>


<h1>您的有興趣之遊戲清單目前遊戲總數如下</h1>


<form id="test1-form">

<button id="start-test1-button" class="btn btn-large btn-warning" href="#">開始進行受測推薦運算</button>

</form>
</center>';



}




?>

   </div>


	</div>
     </div>

<div class="st-loader"><span class="equal"></span></div>
<div id="test1-output">




<?php 

$user_id = $_SESSION['user_id'];



if (!check_file_exist($user_id, 'rate') && check_file_exist($user_id, 'record')) {
	

test1_output($user_id);


}else if(check_file_exist($user_id, 'rate') && check_file_exist($user_id, 'record')){




test1_output2($user_id);







}else{

$count = count($_SESSION['fav_cart']);



if ($count > 0) {


echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您目前一共挑了'.$count.'款遊戲，恭喜您已經具有進行受測階段1的資格囉!</h1></center>';
	
}else{
	

echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您的有興趣之遊戲清單目前還是空的，趕快挑選您覺得有興趣的遊戲吧！</h1></center>';


}




}

 ?>




  </div> <!-- test1-output -->
	</div> <!-- /container -->

</body>
</html>