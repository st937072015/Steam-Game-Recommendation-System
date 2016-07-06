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
    <input type="text" placeholder="電子信箱" name="re_username" />
    <input type="password" placeholder="密碼" name="re_password" />
    <button>註冊</button>
    <p class="message">已經註冊了嗎? <a class="login_btn" href="#">進行登入</a></p>
    <p class="message">忘記密碼了嗎? <a class="forgot_btn" href="#">重新設定您的密碼</a></p>
  </form>

  <form class="login-form" method="post">
    <input type="text" placeholder="電子信箱" name="lo_username" />
    <div id="username-status" ></div>
    <input type="password" placeholder="密碼" name="lo_password" />
    <div id="password-status" ></div>
    <button id="login" type="submit">登入</button>
    <div class="loading"><i class="fa fa-spinner fa-spin fa-3x"></i></div>
    <p class="message">想做受測嗎? <a class="register_btn" href="#">進行註冊</a></p>
    <p class="message">忘記密碼了嗎? <a class="forgot_btn" href="#">重新設定您的密碼</a></p>
  </form>

  <form class="forgot-form">
    <input type="text" placeholder="電子信箱" name="for_email" />
    <button>發送重設密碼認證信</button>
    <p class="message">想做受測嗎? <a class="register_btn" href="#">進行註冊</a></p>
    <p class="message">已經註冊了嗎? <a class="login_btn" href="#">進行登入</a></p>
  </form>


</div>
<script src="js/login_index.js"></script>
  </body>
</html>
