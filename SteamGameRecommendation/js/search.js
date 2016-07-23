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
   $(".loading").css({"color": "#CE1141", "font-size": "16px"}).show();
    
	}
})
.done(function(search_output) {
	console.log("search_output");
    
    //alert(search_output);



    $(".loading").css({"color": "#CE1141", "font-size": "16px"}).hide();
    $("#search-output").html(search_output).show();
    $("#this-page-1").addClass("this-page");

    

})
.fail(function() {

	console.log("error");

})
.always(function() {


});


return false;


});

// <以下為直接搜尋全部遊戲功能--------------------------------------------------------------------------------------------------->
$("#see-all-game").click(function() {
	

var game_search = "see-all-game";

$("#game-search").val("see-all-game");	

$.ajax({
	url: "key_word_search.php",
	type: "POST",
	data: {game_search: game_search},
	cache: false,
	 beforeSend:function()
	{
			
   $("#search-output").hide();
   $(".loading").css({"color": "#CE1141", "font-size": "16px"}).show();
    
	}
})
.done(function(search_output) {
	console.log("search_output");
    
    //alert(search_output);

    

    $(".loading").css({"color": "#CE1141", "font-size": "16px"}).hide();
    $("#search-output").html(search_output).show();
    $("#this-page-1").addClass("this-page");

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
   $(".loading").css({"color": "#CE1141", "font-size": "16px"}).show();
    
	}
})
.done(function(page_search_output) {
	console.log("page_search_output");
    
    //alert(page_search_output);

     
    $("#search-output > a").removeClass("this-page");
    $(".loading").css({"color": "#CE1141", "font-size": "16px"}).hide();
    $("#game-info").html(page_search_output).show();
    $("#this-page-" + game_page_index).addClass("this-page");

    

})
.fail(function() {

	console.log("error");

})
.always(function() {


});

return false;















}

// <以下為遊戲屬性標籤post搜尋功能--------------------------------------------------------------------------------------------------->

function tag_page(tag_name){


var tag_search = tag_name;


//alert(tag_search);

$.ajax({
	url: "key_word_search.php",
	type: "POST",
	data: {tag_search: tag_search},
	cache: false,
	 beforeSend:function()
	{
			
   $("#search-output").hide();
   $(".loading").css({"color": "#CE1141", "font-size": "16px"}).show();
    
	}
})
.done(function(tag_page_search_output) {
	console.log("tag_page_search_output");
    
  
//alert(tag_page_search_output);
     

    $(".loading").css({"color": "#CE1141", "font-size": "16px"}).hide();
    $("#search-output").html(tag_page_search_output).show();

    

})
.fail(function() {

	console.log("error");

})
.always(function() {


});

return false;





}


// <以下為將有興趣之遊戲加入清單功能--------------------------------------------------------------------------------------------------->

function game_add(appid){


var add_game = appid;


//alert(tag_search);

$.ajax({
	url: "game_cart_check.php",
	type: "POST",
	data: {add_game: add_game},
	cache: false,
	 beforeSend:function()
	{
			
   $(".loading").css({"color": "#CE1141", "font-size": "16px"}).show();
    
	}
})
.done(function(game_add_output) {
	console.log("game_add_output");
    
  
alert(game_add_output);
     

    $(".loading").css({"color": "#CE1141", "font-size": "16px"}).hide();

    if (game_add_output == "success") {

    swal("加入成功", "此遊戲已經加入到您的興趣清單中囉!", "success");
    

    }else if(game_add_output == "fail"){


   swal("加入失敗", "此遊戲您已經加入過囉!", "error");



    }
     
    

})
.fail(function() {

	console.log("error");

})
.always(function() {


});

return false;





}






