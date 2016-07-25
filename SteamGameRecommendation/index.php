<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Steam Game Recommendation System</title>
    
<link rel="shortcut icon" href="img/notify/favicon.ico">   
<link rel="stylesheet" href="css/login_reset.css">
<link rel="stylesheet" href="css/login_style.css">
<link rel="stylesheet" href="css/notify_style.css">
<link rel="stylesheet" href="css/font-awesome.css">

<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>


<script src="js/jquery-3.0.0.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/login.js"></script>


</head>


  <body>

<div class="container">
  <div class="info">
    <h1>Steam Game Recommendation Research System</h1>
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="img/notify/Steam-icon.png"></div>
  <form class="register-form">
    <input type="text" placeholder="年齡" name="age" />
    <div id="age-status" ></div>
    <input type="text" placeholder="家樂福禮券收件地址" name="zone_address" />
    <div id="receive-status" ></div>
    <input type="text" placeholder="收件人暱稱或姓氏" name="nickname" />
    <div id="nickname-status" ></div>
    <input type="text" placeholder="臉書帳號，有問題方便聯繫用" name="fb" />
    <div id="fb-status" ></div>
    <input type="text" placeholder="電子信箱 (*等同登入帳號*)" name="re_username" />
    <div id="re-username-status" ></div>
    <input type="password" placeholder="密碼" name="re_password" />
    <div id="re-password-status" ></div>
    <p>是否有steam社群帳號</p>
    <select name="steam_account">
    <option value="有">有</option>
    <option value="無">無</option>
    </select>
    <div id="steam-account-status" ></div>
    <p>性別</p>
    <select name="gender">
    <option value="男">男</option>
    <option value="女">女</option>
    </select>
    <div id="gender-status" ></div>
    <p>學歷</p>
    <select name="career">
    <option value="高中">高中</option>
    <option value="大學">大學</option>
    <option value="研究所以上">研究所以上</option>
    </select>
    <div id="school-status" ></div>
    <p class="legal">我願意遵守以下事項：<br>"我已年滿至少20歲以上，我對遊戲有興趣或是自己本身就為Steam遊戲平台上有一定遊玩經驗的玩家或是曾玩過電玩遊戲，願意盡自己的一份心力來用心幫助此研究的完成受測任務!"<br>認同且按同意按鈕方可進行註冊</p>
    <p>同意</p>
    <input type="checkbox" name="agree" value="是" />
    <div id="agree-status" ></div>
    <button id="register" type="submit">註冊</button>
    <div id="join-status" ></div>
    <div class="loading"><i class="fa fa-spinner fa-spin fa-3x"></i></div>
    <p class="message">已經註冊了嗎? <a class="login_btn" href="#">進行登入</a></p>
    <p class="message">忘記密碼了嗎? <a class="forgot_btn" href="#">重新設定您的密碼</a></p>
  </form>
  <form class="login-form" method="post">
    <input type="text" placeholder="電子信箱" name="lo_username" />
    <div id="username-status" ></div>
    <input type="password" placeholder="密碼" name="lo_password" />
    <div id="password-status"></div>
    <button id="login" type="submit">登入</button>
    <div id="db-status" ></div>
    <div class="loading"><i class="fa fa-spinner fa-spin fa-3x"></i></div>
    <p class="message">想做受測嗎? <a class="register_btn" href="#">進行註冊</a></p>
    <p class="message">忘記密碼了嗎? <a class="forgot_btn" href="#">重新設定您的密碼</a></p>
  </form>

  <form class="forgot-form" method="post">
    <input type="text" placeholder="要重設密碼的電子信箱帳號" name="for_email" />
    <div id="reset-status" ></div>
    <button id="reset" type="submit">發送重設密碼認證信</button>
    <div id="reset-send" ></div>
    <div class="loading"><i class="fa fa-spinner fa-spin fa-3x"></i></div>
    <p class="message">想做受測嗎? <a class="register_btn" href="#">進行註冊</a></p>
    <p class="message">已經註冊了嗎? <a class="login_btn" href="#">進行登入</a></p>
  </form>


</div>
<script src="js/login_index.js"></script>
  </body>
</html>
