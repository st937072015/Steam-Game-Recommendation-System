$(document).ready(function(){



$("#login").click(function() {

$.ajax({
	url: "login_check.php",
	type: "POST",
	data: $(".login-form").serializeArray(),

})
.done(function(login_check) {
	console.log("login_check");

if (login_check == 'username_empty') {

    alert('帳號不可為空');


}else if(login_check == 'password_empty'){

   alert('密碼不可為空');

}else if(login_check == 'all_empty'){


alert('帳號與密碼皆為空白');


}else if(login_check == 'pass'){


alert('都有填完');


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


