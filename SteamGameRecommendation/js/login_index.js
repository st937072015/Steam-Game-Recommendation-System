// 判別表單狀態

var index = 0;


// 會員註冊表單
$(".register_btn").click(function(){

index = 0;
  if (index == 0) {
$(".register-form").animate({height: "toggle", opacity: "toggle"}, "slow");
$(".forgot-form").hide();
$(".login-form").hide();


}

});


// 會員登入表單
$(".login_btn").click(function(){

index = 1;
if (index == 1) {

$(".login-form").animate({height: "toggle", opacity: "toggle"}, "slow");
$(".register-form").hide();
$(".forgot-form").hide();

}


  
});

// 忘記密碼表單
$(".forgot_btn").click(function(){

index = 2;
if (index == 2) {


$(".forgot-form").animate({height: "toggle", opacity: "toggle"}, "slow");
$(".register-form").hide();
$(".login-form").hide();

}
  
});


