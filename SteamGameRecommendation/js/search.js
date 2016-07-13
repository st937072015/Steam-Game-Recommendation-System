$(document).ready(function(){

// <以下為遊戲搜尋功能--------------------------------------------------------------------------------------------------->
$("#game-search").keyup(function() {
	
$.ajax({
	url: "key_word_search.php",
	type: "POST",
	data: $("#search-form").serialize(),
	cache: false,
	 beforeSend:function()
	{
			

   $(".loading").css({"color": "#6e5494", "font-size": "16px"}).show();
    
	}
})
.done(function(search_output) {
	console.log("search_output");
    
    //alert(search_output);



    $(".loading").css({"color": "#6e5494", "font-size": "16px"}).hide();
    $("#search-output").html(search_output);
    

})
.fail(function() {

	console.log("error");

})
.always(function() {


});


return false;


});





});











