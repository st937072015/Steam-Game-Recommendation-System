<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Steam Game Recommendation System</title>
    
    
<link rel="stylesheet" href="css/login_reset.css">
<link rel="stylesheet" href="css/login_style.css">
<link rel="stylesheet" href="css/notify_style.css">
<link rel="stylesheet" href="css/font-awesome.css">

<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>


<script src="js/jquery-3.0.0.js"></script>
<script src="js/login.js"></script>


</head>


  <body>

<div class="container">
  <div class="info">
    <h1>Flat Login Form</h1>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  <form class="register-form">
    <input type="text" placeholder="username" name="re_username" />
    <input type="password" placeholder="password" name="re_password" />
    <input type="text" placeholder="email address" name="re_email" />
    <button>create</button>
    <p class="message">Already registered? <a class="login_btn" href="#">Sign In</a></p>
    <p class="message">Forgot password? <a class="forgot_btn" href="#">Request your password</a></p>
  </form>

  <form class="login-form" method="post">
    <input type="text" placeholder="username" name="lo_username" />
    <div id="username-status" ></div>
    <input type="password" placeholder="password" name="lo_password" />
    <div id="password-status" ></div>
    <button id="login" type="submit">login</button>
    <div class="loading"><i class="fa fa-spinner fa-spin fa-3x"></i></div>
    <p class="message">Not registered? <a class="register_btn" href="#">Create an account</a></p>
    <p class="message">Forgot password? <a class="forgot_btn" href="#">Request your password</a></p>
  </form>

  <form class="forgot-form">
    <input type="text" placeholder="email address" name="for_email" />
    <button>request</button>
    <p class="message">Already registered? <a class="register_btn" href="#">Create an account</a></p>
    <p class="message">Not registered? <a class="login_btn" href="#">Sign In</a></p>
  </form>


</div>
<script src="js/login_index.js"></script>
  </body>
</html>
