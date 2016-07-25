$(document).ready(function(){

// 推薦清單tabs初始化
$.ionTabs("#tabs_1, #tabs_2, #tabs_3, #tabs_4, #tabs_5, #tabs_6, #tabs_7, #tabs_8, #tabs_9, #tabs_10, #tabs_11, #tabs_12");

// <以下為進行推薦受測1測驗功能--------------------------------------------------------------------------------------------------->
$("#start-test1-button").click(function() {
	

var start_test1 = "test1_qualified";


$.ajax({
	url: "step1_test_calculate.php",
	type: "POST",
	data: {start_test1: start_test1},
	cache: false,
	 beforeSend:function()
	{
			
   $("#test1-output").hide();
   $(".st-loader").show();
    
	}
})
.done(function(test1_output) {
	console.log("test1_output");
    
    alert(test1_output);

    

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