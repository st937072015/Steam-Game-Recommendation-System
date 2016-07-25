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

<div class="st-loader"><span class="equal"><center><h3>運算中，請稍待片刻。</h3></center></span></div>
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

 

 <center>
<div class="row">


<div class="ionTabs" id="tabs_1" data-name="Tabs_Group_name">
    <ul class="ionTabs__head">
        <li class="ionTabs__tab" data-target="Tab_1_name">推薦結果1</li>
        <li class="ionTabs__tab" data-target="Tab_2_name">推薦結果2</li>
        <li class="ionTabs__tab" data-target="Tab_3_name">推薦結果3</li>
        <li class="ionTabs__tab" data-target="Tab_4_name">推薦結果</li>
        <li class="ionTabs__tab" data-target="Tab_5_name">推薦結果</li>
        <li class="ionTabs__tab" data-target="Tab_6_name">推薦結果</li>
        <li class="ionTabs__tab" data-target="Tab_7_name">推薦結果7</li>
        <li class="ionTabs__tab" data-target="Tab_8_name">推薦結果8</li>
        <li class="ionTabs__tab" data-target="Tab_9_name">推薦結果9</li>
        <li class="ionTabs__tab" data-target="Tab_10_name">推薦結果10</li>
        <li class="ionTabs__tab" data-target="Tab_11_name">推薦結果11</li>
        <li class="ionTabs__tab" data-target="Tab_12_name">推薦結果12</li>
    </ul>
    <div class="ionTabs__body">
        <div class="ionTabs__item" data-name="Tab_1_name">
            

                        <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>




        </div>
        <div class="ionTabs__item" data-name="Tab_2_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>
        <div class="ionTabs__item" data-name="Tab_3_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>

                <div class="ionTabs__item" data-name="Tab_4_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>


                <div class="ionTabs__item" data-name="Tab_5_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>


                <div class="ionTabs__item" data-name="Tab_6_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>


                <div class="ionTabs__item" data-name="Tab_7_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>


                <div class="ionTabs__item" data-name="Tab_8_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>


                <div class="ionTabs__item" data-name="Tab_9_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>


                <div class="ionTabs__item" data-name="Tab_10_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>


                <div class="ionTabs__item" data-name="Tab_11_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>


                <div class="ionTabs__item" data-name="Tab_12_name">
                          <div class="animated fadeInLeft">
				<div class="thumbnail small-card-background">
					<img src="http://cdn.akamai.steamstatic.com/steam/apps/20/header.jpg">
					<div class="caption">
						<h3>5555</h3>
						<h3>55555</h3>
						<a class="steam-index" target="_blank" href="http://store.steampowered.com/app/30"><p>Steam商城遊戲產品詳細說明連結</p></a> 
						<p><a class="btn btn-primary">將遊戲加入興趣清單</a></p>
					</div>
				</div>
			</div>
        </div>

        <div class="ionTabs__preloader"></div>
    </div>
</div>

</div>


</center>
		

	</div> <!-- /container -->

</body>
</html>