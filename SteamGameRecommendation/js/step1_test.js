$(document).ready(function(){


// <以下為直接搜尋全部遊戲功能--------------------------------------------------------------------------------------------------->
$("#start-test1-button").click(function() {
	

var start_test = "test1_qualified";


$.ajax({
	url: "step1_test_calculate.php",
	type: "POST",
	data: {start_test: start_test},
	cache: false,
	 beforeSend:function()
	{
			
   $("#test1-output").hide();
   $(".st-loader").show();
    
	}
})
.done(function(test1_output) {
	console.log("test1_output");
    
    //alert(test1_output);

    

    $(".st-loader").hide();
    $("#test1-output").html(test1_output).show();


})
.fail(function() {

	console.log("error");

})
.always(function() {


});


return false;


});













});