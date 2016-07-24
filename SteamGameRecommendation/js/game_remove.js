// <以下為將有興趣之遊戲移除清單功能--------------------------------------------------------------------------------------------------->

function game_remove(appid){


var remove_game = appid;


//alert(tag_search);

$.ajax({
	url: "game_cart_check.php",
	type: "POST",
	data: {remove_game: remove_game},
	cache: false,
	 beforeSend:function()
	{
			
   $(".loading").css({"color": "#CE1141", "font-size": "16px"}).show();
    
	}
})
.done(function(game_remove_output) {
	console.log("game_remove_output");
    
  
//alert(game_remove_output);
     

    $(".loading").css({"color": "#CE1141", "font-size": "16px"}).hide();

    if (game_remove_output == "remove success") {

    swal("移除成功，1秒後頁面自動刷新", "此遊戲已經從您的興趣清單中移除掉囉!", "success");

    setTimeout(function(){
    location.reload();
    },1000);

    


    }else if(game_remove_output == "remove fail"){



    swal("移除失敗，1秒後頁面自動刷新", "您的興趣清單的遊戲是空的!", "error");

    setTimeout(function(){
    location.reload();
    },1000);



    }else if(game_remove_output == "game is empty"){

    swal("移除失敗，1秒後頁面自動刷新", "此遊戲已經不存在於您的興趣清單之中!", "error");

    setTimeout(function(){
    location.reload();
    },1000);


    }else{



    $("#list-output").html(game_remove_output).show();



    }


    
     
    

})
.fail(function() {

	console.log("error");

})
.always(function() {


});

return false;





}
