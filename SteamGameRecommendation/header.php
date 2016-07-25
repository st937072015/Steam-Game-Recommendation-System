<?php 


echo '<div class="navbar navbar-inverse navbar-fixed-top">
					<div class="navbar-inner ">
						<ul class="nav">
		  					<li><a href="#"><i class="fa fa-book"></i> 受測說明</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="panel_main.php"><i class="fa fa-search"></i> 遊戲搜尋</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="personality_form.php"><i class="fa fa-pencil"></i> 人格測驗</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="step1_test.php"><i class="fa fa-pencil"></i> 受測階段1</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="#"><i class="fa fa-pencil"></i> 受測階段2</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="game_cart.php"><i class="fa fa-heart"></i> 已挑選有興趣遊戲之清單</a></li>
		  					<li class="divider-vertical"></li>
		  					<li><a href="#"><i class="fa fa-eye"></i> 受測任務完成度</a></li>
		  					<li class="divider-vertical"></li>
						</ul>
							<ul class="nav pull-right">
							<li class="divider-vertical"></li>
							<li><a href="#"><i class="fa fa-user"></i> '.$_SESSION['nickname'].'，'.$_SESSION['level'].'，您好！ </a></li>
							<li class="divider-vertical"></li>
		  					<li><a href="logout.php"><i class="fa fa-sign-out"></i> 登出</a></li>
		  					<li class="divider-vertical"></li>
						</ul>
					</div> <!-- /.navbar-inner -->
				</div> <!-- /.navbar -->';






 ?>