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
			
   $("#search-output").hide();
   $(".loading").css({"color": "#6e5494", "font-size": "16px"}).show();
    
	}
})
.done(function(search_output) {
	console.log("search_output");
    
    //alert(search_output);



    $(".loading").css({"color": "#6e5494", "font-size": "16px"}).hide();
    $("#search-output").html(search_output).show();
    

})
.fail(function() {

	console.log("error");

})
.always(function() {


});


return false;


});











});


// <以下為遊戲資訊分頁post功能--------------------------------------------------------------------------------------------------->

function change_page(page_id){



var game_page_index = page_id;

var game_current_keyword = $("#game-search").val();



$.ajax({
	url: "key_word_search.php",
	type: "POST",
	data: {game_page_index: game_page_index, game_current_keyword: game_current_keyword},
	cache: false,
	 beforeSend:function()
	{
			
   $("#game-info").hide();
   $(".loading").css({"color": "#6e5494", "font-size": "16px"}).show();
    
	}
})
.done(function(page_search_output) {
	console.log("page_search_output");
    
    //alert(page_search_output);



    $(".loading").css({"color": "#6e5494", "font-size": "16px"}).hide();
    $("#game-info").html(page_search_output).show();
    

})
.fail(function() {

	console.log("error");

})
.always(function() {


});

return false;















}








