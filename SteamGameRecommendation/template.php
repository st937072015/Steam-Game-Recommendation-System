<?php 
require_once("login_double_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap template</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" href="css/bootstrap-responsive.css"> -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/panel_toggle_switch.css">
	<link rel="stylesheet" href="css/panel_style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<!--[if lt IE 9]>
	<script src="dist/html5shiv.js"></script>
	<![endif]-->
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
<h1>Steam遊戲搜尋</h1>
<form>
<div class="row">
<input type="text" name="game_search">
</div>
<div class="row">
<button class="btn btn-large btn-inverse"><i class="fa fa-search"></i>搜尋</button>
</div>
</form>
</center>
   </div>


	</div>
     </div>




		<div class="row">
			
			<div class="span3">
				<a href="#" class="btn btn-large btn-block">Default</a>
			</div>

			<div class="span3">
				<a href="#" class="btn btn-large btn-block btn-primary">Primary</a>
			</div>

			<div class="span3">
				<a href="#" class="btn btn-large btn-block btn-info">Info</a>
			</div>

			<div class="span3">
				<a href="#" class="btn btn-large btn-block btn-success">Success</a>
			</div>

		</div>

		<div class="row">
			
			<div class="span3">
				<a href="#" class="btn btn-large btn-block btn-inverse">Inverse</a>
			</div>

			<div class="span3">
				<a href="#" class="btn btn-large btn-block btn-warning">Warning</a>
			</div>

			<div class="span3">
				<a href="#" class="btn btn-large btn-block btn-danger">Danger</a>
			</div>

			<div class="span3">
				<a href="#" class="btn btn-large btn-block disabled">Disabled</a>
			</div>

		</div>

		<div class="row">
			<div class="span3">
				<div class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="" tabindex="-1">Label 1</a></li>
						<li><a href="" tabindex="-1">Label 2</a></li>
						<li><a href="" tabindex="-1">Lable 3</a></li>
					</ul>
				</div>
			</div>

			<div class="span3">
				<div class="dropdown">
  					<a class="btn btn-block btn-large dropdown-toggle" data-toggle="dropdown" href="#">Dropdown<span class="caret"></span></a>
  					<ul class="dropdown-menu">
    					<li><a href="" tabindex="-1">Label 1</a></li>
						<li><a href="" tabindex="-1">Label 2</a></li>
						<li><a href="" tabindex="-1">Lable 3</a></li>
  					</ul>
				</div>
			</div>

			<div class="span3">
				<div class="btn-group">
				  	<button class="btn">
				  		<div aria-hidden="true" data-icon="&#xe001;"></div>
				  	</button>
					<button class="btn">
						<div aria-hidden="true" data-icon="&#xe002;"></div>
					</button>
					<button class="btn">
						<div aria-hidden="true" data-icon="&#xe003;"></div>
					</button>
					<button class="btn">
						<div aria-hidden="true" data-icon="&#xe000;"></div>
					</button>
				</div>
			</div>

			<div class="span3">
				<div class="btn-group" data-toggle="buttons-radio">
				  <button type="button" class="btn" data-toggle="button">Left</button>
				  <button type="button" class="btn">Right</button>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span2">
				<div class="btn-group btn-block">
				  <button class="btn btn-action">Action</button>
				  <button class="btn dropdown-toggle pull-right" data-toggle="dropdown">
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="" tabindex="-1">Label 1</a></li>
					<li><a href="" tabindex="-1">Label 2</a></li>
					<li><a href="" tabindex="-1">Lable 3</a></li>
				  </ul>
				</div>
			</div>

			<div class="span2">
				<div class="btn-group btn-block">
				  <button class="btn btn-primary btn-action">Action</button>
				  <button class="btn btn-primary dropdown-toggle pull-right" data-toggle="dropdown">
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="" tabindex="-1">Label 1</a></li>
					<li><a href="" tabindex="-1">Label 2</a></li>
					<li><a href="" tabindex="-1">Lable 3</a></li>
				  </ul>
				</div>
			</div>

			<div class="span2">
				<div class="btn-group btn-block">
				  <button class="btn btn-info btn-action">Action</button>
				  <button class="btn btn-info dropdown-toggle pull-right" data-toggle="dropdown">
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="" tabindex="-1">Label 1</a></li>
					<li><a href="" tabindex="-1">Label 2</a></li>
					<li><a href="" tabindex="-1">Lable 3</a></li>
				  </ul>
				</div>
			</div>

			<div class="span2">
				<div class="btn-group btn-block">
				  <button class="btn btn-success btn-action">Action</button>
				  <button class="btn btn-success dropdown-toggle pull-right" data-toggle="dropdown">
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="" tabindex="-1">Label 1</a></li>
					<li><a href="" tabindex="-1">Label 2</a></li>
					<li><a href="" tabindex="-1">Lable 3</a></li>
				  </ul>
				</div>
			</div>

			<div class="span2">
				<div class="btn-group btn-block">
				  <button class="btn btn-warning btn-action">Action</button>
				  <button class="btn btn-warning dropdown-toggle pull-right" data-toggle="dropdown">
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="" tabindex="-1">Label 1</a></li>
					<li><a href="" tabindex="-1">Label 2</a></li>
					<li><a href="" tabindex="-1">Lable 3</a></li>
				  </ul>
				</div>
			</div>

			<div class="span2">
				<div class="btn-group btn-block">
				  <button class="btn btn-danger btn-action">Action</button>
				  <button class="btn btn-danger dropdown-toggle pull-right" data-toggle="dropdown">
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="" tabindex="-1">Label 1</a></li>
					<li><a href="" tabindex="-1">Label 2</a></li>
					<li><a href="" tabindex="-1">Lable 3</a></li>
				  </ul>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span4">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab">Home</a></li>
					<li><a href="#tab2" data-toggle="tab">Profile</a></li>
					<li><a href="#tab3" data-toggle="tab">Messages</a></li>
				</ul>

				<div class="tab-content" id="tab1">
					<div class="tab-pane active">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione labore dignissimos repellendus repudiandae. Quod, eius cupiditate repellendus repudiandae repellat.</p>
					</div>

					<div class="tab-pane" id="tab2">
						<p>Content 2</p>
					</div>

					<div class="tab-pane" id="tab3">
						<p>Content 3</p>
					</div>
				</div> <!-- /tab-content -->
			</div>

			<div class="span4">
				<h1>h1.Heading 1</h1>
				<h2>h2.Heading 2</h2>
				<h3>h3.Heading 3</h3>
				<h4>h4.Heading 4</h4>
				<h5>h5.Heading 5</h5>
				<h6>h6.Heading 6</h6>
			</div>

			<div class="span4">
				<p><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a><a href="#">repellat facilis</a></p>
			</div>
		</div> <!-- /row -->

		

		<div class="row navRow">
			<div class="span12">
				<div class="hero-unit">
  					<h1>Hello, World!</h1>
  					<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  					<p>
    					<a class="btn btn-primary">
      						Learn more
    					</a>
  					</p>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span6">
				<div class="alert alert-block">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <h4>Warning!</h4>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione labore dignissimos repellendus repudiandae. Quod, eius cupiditate repellendus repudiandae repellat.</p>
				</div>
			</div>

			<div class="span6">
				<div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <h4>Danger!</h4>
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione labore dignissimos repellendus repudiandae. Quod, eius cupiditate repellendus repudiandae repellat.</p>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span6">
				<ul class="breadcrumb">
				  <li><a href="#">Home</a> <span class="divider">/</span></li>
				  <li><a href="#">Library</a> <span class="divider">/</span></li>
				  <li class="active">Data</li>
				</ul>
			</div>

			<div class="span6">
				<div class="alert alert-success">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Success!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing.
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span12">
				<div class="progress">
				  <div class="bar" style="width: 60%;"></div>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span2">
				<label class="checkbox toggle candy" onclick="">
					<input id="view" type="checkbox" />
					<p>
						<span>On</span>
						<span>Off</span>
					</p>
					
					<a class="slide-button"></a>
				</label>
			</div>

			<div class="span4 offset1">
				<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				<label class="radio inline" for="optionsRadios1"><span></span>Option 1</label>

				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				<label class="radio inline" for="optionsRadios2"><span></span>Option 2</label>

				<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				<label class="radio inline" for="optionsRadios3"><span></span>Option 3</label>
			</div>

			<div class="span4 offset1">
				<input type="checkbox" name="optionsCheckbox" id="optionsCheckbox1" value="option1" checked>
				<label class="checkbox inline" for="optionsCheckbox1"><span></span>Option 1</label>

				<input type="checkbox" name="optionsCheckbox" id="optionsCheckbox2" value="option2">
				<label class="checkbox inline" for="optionsCheckbox2"><span></span>Option 2</label>

				<input type="checkbox" name="optionsCheckbox" id="optionsCheckbox3" value="option3">
				<label class="checkbox inline" for="optionsCheckbox3"><span></span>Option 3</label>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span3">
				<div class="control-group warning">
					<input id="inputWarning" type="text">
				</div>
			</div>

			<div class="span3">
				<div class="control-group error">
					<input class="input-block-level" type="text">
				</div>
			</div>

			<div class="span3">
				<div class="control-group success">
					<input class="input-block-level" type="text">
				</div>
			</div>

			<div class="span3">
				<input class="input-block-level" type="text" placeholder="Disabled" disabled>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span4">
				<div class="thumbnail">
					<img src="assets/img1.jpg" alt="Thumbnail 1">
					<div class="caption">
						<h3>Thumbnail Label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione labore dignissimos repellendus repudiandae. </p>
						<p><a class="btn btn-primary" href="">Learn More</a></p>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="thumbnail">
					<img src="assets/img2.jpg" alt="Thumbnail 1">
					<div class="caption">
						<h3>Thumbnail Label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione labore dignissimos repellendus repudiandae. </p>
						<p><a class="btn btn-primary" href="">Learn More</a></p>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="thumbnail">
					<img src="assets/img3.jpg" alt="Thumbnail 1">
					<div class="caption">
						<h3>Thumbnail Label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione labore dignissimos repellendus repudiandae. </p>
						<p><a class="btn btn-primary" href="">Learn More</a></p>
					</div>
				</div>
			</div>
		</div> <!-- /row -->
		<div class="row">
			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe000;"></div>
					<p>&amp;#xe000;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe001;"></div>
					<p>&amp;#xe001;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe002;"></div>
					<p>&amp;#xe002;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe003;"></div>
					<p>&amp;#xe003;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe004;"></div>
					<p>&amp;#xe004;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe005;"></div>
					<p>&amp;#xe005;</p>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe006;"></div>
					<p>&amp;#xe006;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
					<p>&amp;#xe007;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe009;"></div>
					<p>&amp;#xe009;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe019;"></div>
					<p>&amp;#xe019;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe018;"></div>
					<p>&amp;#xe018;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe017;"></div>
					<p>&amp;#xe017;</p>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe016;"></div>
					<p>&amp;#xe016;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe015;"></div>
					<p>&amp;#xe015;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe008;"></div>
					<p>&amp;#xe008;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe00a;"></div>
					<p>&amp;#xe00a;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe01b;"></div>
					<p>&amp;#xe01b;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe017;"></div>
					<p>&amp;#xe017;</p>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe00b;"></div>
					<p>&amp;#xe00b;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe00c;"></div>
					<p>&amp;#xe00c;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe010;"></div>
					<p>&amp;#xe010;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe00f;"></div>
					<p>&amp;#xe00f;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe00d;"></div>
					<p>&amp;#xe00d;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe01a;"></div>
					<p>&amp;#xe01a;</p>
				</div>
			</div>
		</div> <!-- /row -->
		
		<div class="row">
			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe00e;"></div>
					<p>&amp;#xe00e;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe011;"></div>
					<p>&amp;#xe011;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe012;"></div>
					<p>&amp;#xe012;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe013;"></div>
					<p>&amp;#xe013;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe01c;"></div>
					<p>&amp;#xe01c;</p>
				</div>
			</div>

			<div class="span2">
				<div class="glyph">
					<div class="fs1" aria-hidden="true" data-icon="&#xe01d;"></div>
					<p>&amp;#xe01d;</p>
				</div>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-align-right"></span>
					<span class="IconclassName">&nbsp; .icon-ml-align-right</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-align-left"></span>
					<span class="IconclassName">&nbsp; .icon-ml-align-left</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-align-justify"></span>
					<span class="IconclassName">&nbsp; .icon-ml-align-justify</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-align-center"></span>
					<span class="IconclassName">&nbsp; .icon-ml-align-center</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-checkmark"></span>
					<span class="IconclassName">&nbsp; .icon-ml-checkmark</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-arrow-right"></span>
					<span class="IconclassName">&nbsp; .icon-ml-arrow-right</span>
				</span>
			</div>

		</div>

		<div class="row">
			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-arrow-left"></span>
					<span class="IconclassName">&nbsp; .icon-ml-arrow-left</span>
				</span>
			</div>
				
			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-arrow-down"></span>
					<span class="IconclassName">&nbsp; .icon-ml-arrow-down</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-refresh"></span>
					<span class="IconclassName">&nbsp; .icon-ml-refresh</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-alert"></span>
					<span class="IconclassName">&nbsp; .icon-ml-alert</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-question"></span>
					<span class="IconclassName">&nbsp; .icon-ml-question</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-info"></span>
					<span class="IconclassName">&nbsp; .icon-ml-info</span>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-delete"></span>
					<span class="IconclassName">&nbsp; .icon-ml-delete</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-add"></span>
					<span class="IconclassName">&nbsp; .icon-ml-add</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-remove"></span>
					<span class="IconclassName">&nbsp; .icon-ml-remove</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-check"></span>
					<span class="IconclassName">&nbsp; .icon-ml-check</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-arrow-up"></span>
					<span class="IconclassName">&nbsp; .icon-ml-arrow-up</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-settings"></span>
					<span class="IconclassName">&nbsp; .icon-ml-settings</span>
				</span>
			</div>
		</div>

		<div class="row">
			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-email"></span>
					<span class="IconclassName">&nbsp; .icon-ml-email</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-lock"></span>
					<span class="IconclassName">&nbsp; .icon-ml-lock</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-cloud"></span>
					<span class="IconclassName">&nbsp; .icon-ml-cloud</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-folder"></span>
					<span class="IconclassName">&nbsp; .icon-ml-folder</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-cart"></span>
					<span class="IconclassName">&nbsp; .icon-ml-cart</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-search"></span>
					<span class="IconclassName">&nbsp; .icon-ml-search</span>
				</span>
			</div>

		</div>

		<div class="row">
			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-export"></span>
					<span class="IconclassName">&nbsp; .icon-ml-export</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-anchor"></span>
					<span class="IconclassName">&nbsp; .icon-ml-anchor</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-home"></span>
					<span class="IconclassName">&nbsp; .icon-ml-home</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-eye"></span>
					<span class="IconclassName">&nbsp; .icon-ml-eye</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-chat"></span>
					<span class="IconclassName">&nbsp; .icon-ml-chat</span>
				</span>
			</div>

			<div class="span2">
				<span class="box1">
					<span aria-hidden="true" class="icon-ml-heart"></span>
					<span class="IconclassName">&nbsp; .icon-ml-heart</span>
				</span>
			</div>
		</div> <!-- /row -->
	</div> <!-- /container -->

	<!-- JavaScript -->
	<script src="js/jquery-3.0.0.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
		$(document).ready(function()
		{
			$links=$('a');

			$links.on('click', function(e){
				e.preventDefault();
			})
		});
	</script>
</body>
</html>