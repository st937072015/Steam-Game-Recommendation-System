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
   $("#test1-section").hide();
   $("#test1-output").hide();
   $(".st-loader").show();
   $("#start-test1-button").hide();
       
	}
})
.done(function(test1_output) {
	console.log("test1_output");
    
    //alert(test1_output);

    
if (test1_output == "受測結果數據紀錄檔案發生錯誤") {

    $(".st-loader").hide();
    $("#test1-section").show();
   swal("發生錯誤", "請聯繫本系統管理員!", "error");
   

}else{

	$("#start-test1-button").remove();

	$("#test1-section").remove();

    $(".st-loader").hide();

   swal("演算法計算完成，1秒後頁面自動刷新", "非常感謝您來幫忙受測，接著就要請您給與各個結果評分囉!", "success");
   
   setTimeout(function(){
    location.reload();
    },1000);

}



})
.fail(function() {

	console.log("error");

})
.always(function() {


});


return false;


});




// <以下為評分表單送出功能--------------------------------------------------------------------------------------------------->
$("#rate_button").click(function() {


$.ajax({
	url: "rate_check.php",
	type: "POST",
	data: $("#rate").serialize(),
	beforeSend:function()
	{
			
   $("#rate_button").hide();
   $(".st-loader").show();
    
	}
})
.done(function(rate_data) {
	
//alert(rate_data);


$(".st-loader").hide();


if (rate_data=="success") {


swal("評分送出成功，1秒後頁面自動刷新", "非常感謝您參與第一階段的受測!您的參與促使本研究能有未來改進一步的發展與改進!", "success");

    setTimeout(function(){
    location.reload();
    },1000);


}else if(rate_data=="fail"){

swal("評分送出發生問題", "您的12個評分處尚未全部皆評分完!請檢查12種推薦結果的12個評分處是否都已經給予評分後再點擊送出評分按鈕，感謝您的配合！", "error");

$("#rate_button").show();

}





})
.fail(function() {
	console.log("error");
})
.always(function() {

   $(".st-loader").hide();
});


return false;


});










});