<?php 


echo '<div class="navbar navbar-inverse navbar-fixed-top">
					<div class="navbar-inner ">
						<ul class="nav">
		  					<li><a href="#">受測說明</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="panel_main.php">遊戲搜尋</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="#">受測階段1</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="#">受測階段2</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="game_cart.php">已挑選有興趣遊戲之清單</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="#">受測記錄</a></li>
		  					<li class="divider-vertical"></li>
						</ul>
							<ul class="nav pull-right">
							<li class="divider-vertical"></li>
							<li><a href="#"><i class="fa fa-user-secret "></i> '.$_SESSION['nickname'].'，'.$_SESSION['level'].'，您好！ </a></li>
							<li class="divider-vertical"></li>
		  					<li><a href="#">登出</a></li>
		  					<li class="divider-vertical"></li>
						</ul>
					</div> <!-- /.navbar-inner -->
				</div> <!-- /.navbar -->';






 ?>