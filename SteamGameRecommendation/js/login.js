$(document).ready(function(){

// <以下為登入功能--------------------------------------------------------------------------------------------------->

$("#login").click(function() {

$("#username-status").hide();
$("#password-status").hide();
$("#db-status").hide();



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
$("#db-status").attr("class", "join-status-fail").text("連線失敗，請洽管理員").slideDown("fast");



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
	 beforeSend:function()
	{
			
   $("#register").hide();
   $(".loading").css({"color": "#6e5494", "font-size": "16px"}).show();
    
	}
})
.done(function(register_check_data) {
	console.log("register_check_data");
     
     // Debug
	//alert(register_check);

// 檢查資料庫連線狀態	
if (register_check_data == "connection_fail") {

$("#join-status").attr("class", "join-status-fail").text("連線失敗，請洽管理員").show("fast");

}else{

// json array轉換
var register_check = jQuery.parseJSON(register_check_data);


// 性別驗證 狀態不為9皆不合法
if (register_check[0] != 9) {

$("#gender-status").attr("class", "account-ststus-error").text("性別不合法或空白").slideDown("fast");

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

$("#school-status").attr("class", "account-ststus-error").text("學歷不合法或空白").slideDown("fast");

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

$("#join-status").attr("class", "join-status-success").text("恭喜，此帳號已註冊成功!").show("fast");


}else if (register_check[9] == 0){



$("#join-status").attr("class", "join-status-fail").text("抱歉，此帳號已註冊失敗!").show("fast");


}

//alert(register_check);

}// --> 檢查資料庫連線狀態若成功

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



// <以下為忘記密碼功能--------------------------------------------------------------------------------------------------->
$("#reset").click(function() {

$("#reset-status").hide();
$("#reset-send").hide();


$.ajax({
	url: "password_initial.php",
	type: "POST",
	data: $(".forgot-form").serialize(),
	beforeSend:function()
	{
			
   $("#reset").hide();
   $(".loading").css({"color": "#6e5494", "font-size": "16px"}).show();
    
	}
})
.done(function(reset_check_data) {
	
//alert(reset_check_data);

if (reset_check_data == "connection_fail") {


$("#reset-send").attr("class", "join-status-fail").text("連線失敗，請洽管理員").show("fast");


}else if(reset_check_data == "email_empty"){


$("#reset-status").attr("class", "account-ststus-error").text("電子郵件帳號不可空白").slideDown("fast");



}else if(reset_check_data == "email_not_exist"){


$("#reset-status").attr("class", "account-ststus-error").text("電子郵件帳號不存在").slideDown("fast");


}else if(reset_check_data == "reset_email_send_success"){


$("#reset-send").attr("class", "join-status-success").text("密碼重置信已寄送成功").show("fast");



}else if(reset_check_data == "reset_email_send_fail"){


$("#reset-send").attr("class", "join-status-fail").text("密碼重置信寄送失敗").show("fast");


}else if(reset_check_data == "reset_email_send_already"){


$("#reset-send").attr("class", "join-status-fail").text("此帳號的密碼重置信已經寄送過囉，如有問題請洽管理員").show("fast");


}






})
.fail(function() {
	console.log("error");
})
.always(function() {
   $("#reset").show();
   $(".loading").hide();
});


return false;


});

// <以下為忘記密碼進行重新設定功能--------------------------------------------------------------------------------------------------->

$("#reset-check").click(function() {

$("#reset-check-status").hide();
$("#reset-check-send").hide();

	$.ajax({
		url: "password_ending.php",
		type: "POST",
		data: $(".reset-check-form").serialize(),
		beforeSend:function()
	    {
			
        $("#reset-check").hide();
        $(".loading").css({"color": "#6e5494", "font-size": "16px"}).show();
    
	    }

	})
	.done(function(reset_check_data2) {
		console.log("success");
		// Debug
		//alert(reset_check_data2);
   
  if (reset_check_data2 == "new_password_set_success") {


     $("#reset-check-send").attr("class", "join-status-success").text("密碼已重置完成").show("fast");


     }else if(reset_check_data2 == "new_password_set_fail"){



     $("#reset-check-send").attr("class", "join-status-fail").text("密碼重置失敗，因為您已經重置過囉").show("fast");





     }else if(reset_check_data2 == "connection_fail"){



     $("#reset-check-send").attr("class", "join-status-fail").text("連線失敗，請洽管理員").show("fast");



     }else if(reset_check_data2 == "illegal"){



     $("#reset-check-send").attr("class", "join-status-fail").text("請勿從事非法活動，謝謝").show("fast");



     }else if (reset_check_data2 == "new_password_empty") {



    $("#reset-check-status").attr("class", "account-ststus-error").text("要重新設置的密碼不可空白").slideDown("fast");


     }











	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	   $("#reset-check").show();
       $(".loading").hide();
	});
	

return false;



});







});


