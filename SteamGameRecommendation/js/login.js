$(document).ready(function(){

// <以下為登入功能--------------------------------------------------------------------------------------------------->

$("#login").click(function() {

$("#username-status").hide();
$("#password-status").hide();


$.ajax({
	url: "login_check.php",
	type: "POST",
	data: $(".login-form").serializeArray(),
	 beforeSend:function()
	{
			
   $("#login").hide();
   $(".loading").css({"color": "#6e5494", "font-size": "16px"}).show();
    
	}
})
.done(function(login_check) {
	console.log("login_check");

     // Debug
	//alert(login_check);

// 判斷登入表單填寫狀態	
if (login_check == "username_empty") {

// 帳號留空白   
$("#username-status").attr("class", "account-ststus-error").text("帳號不可為空").slideDown("fast");




}else if(login_check == "password_empty"){

// 密碼留空白   
$("#password-status").attr("class", "account-ststus-error").text("密碼不可為空").slideDown("fast");


}else if(login_check == "all_empty"){



// 帳號留空白與密碼皆留空白  
$("#username-status").attr("class", "account-ststus-error").text("帳號不可為空").slideDown("fast");
$("#password-status").attr("class", "account-ststus-error").text("密碼不可為空").slideDown("fast");


}else if(login_check == "pass"){


// 帳號留空白與密碼皆通過 
$("#username-status").attr("class", "account-ststus-correct").text("帳號通過").show();
$("#password-status").attr("class", "account-ststus-correct").text("密碼通過").show();

window.location="panel_main.php";


}else if(login_check == "account_error"){

// 帳號或密碼錯誤而無法登入 
$("#username-status").attr("class", "account-ststus-error").text("帳號錯誤").slideDown("fast");
$("#password-status").attr("class", "account-ststus-error").text("或是密碼錯誤").slideDown("fast");




}else if(login_check == "connection_fail"){

//資料庫連線狀態
$("#username-status").attr("class", "account-ststus-error").text("連線失敗，請洽管理員").slideDown("fast");



}



})
.fail(function() {

	console.log("error");

})
.always(function() {
	
$("#login").show();
$(".loading").hide();

});


return false;



});

// <以下為註冊功能--------------------------------------------------------------------------------------------------->

$("#register").click(function() {

$("#gender-status").hide();
$("#age-status").hide();
$("#receive-status").hide();
$("#nickname-status").hide();
$("#re-username-status").hide();
$("#re-password-status").hide();
$("#steam-account-status").hide();
$("#school-status").hide();
$("#agree-status").hide();
$("#join-status").hide();

$.ajax({
	url: "register_check.php",
	type: "POST",
	data: $(".register-form").serializeArray(),
	dataType: "json",
	 beforeSend:function()
	{
			
   $("#register").hide();
   $(".loading").css({"color": "#6e5494", "font-size": "16px"}).show();
    
	}
})
.done(function(register_check) {
	console.log("register_check");
     
     // Debug
	alert(register_check);


// 性別驗證 狀態不為9皆不合法
if (register_check[0] != 9) {

$("#gender-status").attr("class", "account-ststus-error").text("性別不合法").slideDown("fast");

}	


// 年齡驗證 狀態不為9皆不合法
if (register_check[1] == 0) {

$("#age-status").attr("class", "account-ststus-error").text("年齡不可空白").slideDown("fast");

}else if(register_check[1] == 1){


$("#age-status").attr("class", "account-ststus-error").text("年齡不合法").slideDown("fast");


}

// 禮券收件地址 狀態不為9皆不合法
if (register_check[2] != 9) {

$("#receive-status").attr("class", "account-ststus-error").text("禮券收件地址不可空白").slideDown("fast");

}	

// 暱稱或姓氏 狀態不為9皆不合法
if (register_check[3] != 9) {

$("#nickname-status").attr("class", "account-ststus-error").text("暱稱或姓氏不可空白").slideDown("fast");

}	

// 學歷驗證 狀態不為9皆不合法
if (register_check[4] != 9) {

$("#school-status").attr("class", "account-ststus-error").text("學歷不合法填或空白").slideDown("fast");

}	

// 同意協議驗證 狀態不為9皆不合法
if (register_check[5] != 9) {

$("#agree-status").attr("class", "account-ststus-error").text("同意協議必須同意").slideDown("fast");

}	

// steam帳號填寫驗證 狀態不為9皆不合法
if (register_check[6] != 9) {

$("#steam-account-status").attr("class", "account-ststus-error").text("steam帳號不合法或空白").slideDown("fast");

}	

// 註冊帳號驗證 狀態不為9皆不合法
if (register_check[7] == 0) {

$("#re-username-status").attr("class", "account-ststus-error").text("註冊帳號不可空白").slideDown("fast");

}else if (register_check[7] == 1) {


$("#re-username-status").attr("class", "account-ststus-error").text("電子郵件帳號格式不合法").slideDown("fast");


}else if (register_check[7] == 2) {


$("#re-username-status").attr("class", "account-ststus-error").text("此電子郵件帳號已經被別人使用囉").slideDown("fast");


}

// 密碼填寫驗證 狀態不為9皆不合法
if (register_check[8] != 9) {

$("#re-password-status").attr("class", "account-ststus-error").text("密碼不可空白").slideDown("fast");

}	


// 會員註冊是否成功驗證 狀態不為9皆不合法
if (register_check[9] == 9) {

$("#join-status").attr("class", "join-status-success").text("恭喜您，註冊成功!").show("fast");

}else{



$("#join-status").attr("class", "join-status-fail").text("抱歉，註冊失敗!").show("fast");


}


 









})
.fail(function() {

	console.log("error");

})
.always(function() {
	
$("#register").show();
$(".loading").hide();

});


return false;



});






});


