$(document).ready(function(){








$("#login").click(function() {

$.ajax({
	url: "login_check.php",
	type: "POST",
	data: $(".login-form").serializeArray(),

})
.done(function(login_check) {
	console.log("login_check");

// 判斷登入表單填寫狀態	

if (login_check == "username_empty") {

// 帳號留空白   
$("#username-status").attr("class", "account-ststus-error").text("帳號不可為空").slideDown( "fast" );

$("#password-status").hide("slow");



}else if(login_check == "password_empty"){

// 密碼留空白   
$("#username-status").hide("slow");
$("#password-status").attr("class", "account-ststus-error").text("密碼不可為空").slideDown( "fast" );





}else if(login_check == "all_empty"){



// 帳號留空白與密碼皆留空白  
$("#username-status").attr("class", "account-ststus-error").text("帳號不可為空").slideDown( "fast" );
$("#password-status").attr("class", "account-ststus-error").text("密碼不可為空").slideDown( "fast" );


}else if(login_check == "pass"){


// 帳號留空白與密碼皆通過 
$("#username-status").attr("class", "account-ststus-correct").text("帳號通過").slideDown( "fast" );
$("#password-status").attr("class", "account-ststus-correct").text("密碼通過").slideDown( "fast" );


}



})
.fail(function() {
	console.log("error");
})
.always(function() {
	console.log("complete");
});


return false;



});










});


