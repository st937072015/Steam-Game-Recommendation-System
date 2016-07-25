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
	<link rel="stylesheet" href="css/sweetalert.css">
	<link rel="stylesheet" href="css/tabs.css">

    <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/step1_test.js"></script>


   

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


<form id="test1-form">

<button id="start-test1-button" class="btn btn-large btn-warning" href="#">開始進行受測運算</button>

</form>
</center>


   </div>


	</div>
     </div>

<div class="st-loader"><span class="equal"><center><h3>運算中</h3></center></span></div>
<div id="test1-output">
<?php 

$count = count($_SESSION['fav_cart']);



if ($count > 0) {


echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您目前一共挑了'.$count.'款遊戲，恭喜您已經具有進行受測階段1的資格囉!</h1></center>';
	
}else{
	

echo '<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您的有興趣之遊戲清單目前還是空的，趕快挑選您覺得有興趣的遊戲吧！</h1></center>';


}

 ?>	


 </div> <!-- test1-output -->

 <center>    <div class="widget">
  <ol class="widget-list" id="managers">
    <li>
      <a class="widget-list-link">
        <img src="http://cdn.akamai.steamstatic.com/steam/apps/370240/header.jpg">
        Manager cgfhfghfghfdgdfgdfgfgh
      </a>
    </li>
    <li>
      <a class="widget-list-link">
             <img src="http://cdn.akamai.steamstatic.com/steam/apps/370240/header.jpg">
        <h4>sdfsdfhgjghjghjgjhgjtyjtyjtyjtyjtyjhjkjkhjjkfghfghfghfghgg</h4>
        <button onclick = window.open("http://cdn.akamai.steamstatic.com/steam/apps/370240/header.jpg") class="btn btn-primary btn-inverse"><h4>Steam遊戲商城連結</h4></button>
      </a>
    </li>
    <li>
      <a class="widget-list-link">
        <img src="http://www.gravatar.com/avatar/47?f=y&amp;s=64&amp;d=identicon">
        Manager #3 <span>342 followers</span>
      </a>
    </li>
  </ol>

  <ol class="widget-list" id="designers">
    <li>
      <a class="widget-list-link">
        <img src="http://www.gravatar.com/avatar/5?f=y&amp;s=64&amp;d=identicon">
        Designer #1 <span>481 followers</span>
      </a>
    </li>
    <li>
      <a class="widget-list-link">
        <img src="http://www.gravatar.com/avatar/5?f=y&amp;s=64&amp;d=identicon">
        Designer #2 <span>5162 followers</span>
      </a>
    </li>
    <li>
      <a class="widget-list-link">
        <img src="http://www.gravatar.com/avatar/5?f=y&amp;s=64&amp;d=identicon">
        Designer #3 <span>342 followers</span>
      </a>
    </li>
  </ol>

  <ol class="widget-list" id="developers">
    <li>
      <a class="widget-list-link">
        <img src="http://www.gravatar.com/avatar/6?f=y&amp;s=64&amp;d=identicon">
        Developer #1 <span>481 followers</span>
      </a>
    </li>
    <li>
      <a class="widget-list-link">
        <img src="http://www.gravatar.com/avatar/6?f=y&amp;s=64&amp;d=identicon">
        Developer #2 <span>5162 followers</span>
      </a>
    </li>
    <li>
      <a class="widget-list-link">
        <img src="http://www.gravatar.com/avatar/6?f=y&amp;s=64&amp;d=identicon">
        Developer #3 <span>342 followers</span>
      </a>
    </li>
  </ol>

  <ul class="widget-tabs">
    <li class="widget-tab">
      <a href="#managers" class="widget-tab-link">Managers</a>
      <!-- Omitting the end tag is valid HTML and removes the space in-between inline blocks. -->
    <li class="widget-tab">
      <a href="#designers" class="widget-tab-link">Designers</a>
    <li class="widget-tab">
      <a href="#developers" class="widget-tab-link">Developers</a>
  </ul>
</div>
</center>
		

	</div> <!-- /container -->

</body>
</html>