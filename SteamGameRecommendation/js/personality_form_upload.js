$(document).ready(function(){

$("#upload_personality_form").on('submit', function(e) {
	e.preventDefault();

$.ajax({
	url: "upload_image.php",
	type: "POST",
	data: new FormData(this),
	contentType: false,
	cache: false,
	processData:false,
	 beforeSend:function()
	{
			
   $("#upload-status").hide();
   $("#st-loader").show();
    
	}
})
.done(function(upload_output) {
	console.log("upload_output");
    
    alert(upload_output);

    if(upload_output == "file upload success"){

    $("#st-loader").hide();

    swal("上傳成功", "測驗圖片已上傳成功囉!","success");

    $("#personality-test-section").remove();
    $("#upload-status").html('<center><img src="img/notify/warning.png" height="250" width="300"><h1 style="color:#ffffff;">您的人格特質心理測驗已經完成並上傳過結果囉!</h1></center>').show();

  }else{


    swal("上傳發生問題", "有可能是非法檔案格式或是上傳圖片size過大，有問題請聯繫本推薦系統管理員!","error");


  	}




})
.fail(function() {

	console.log("error");

})
.always(function() {


});


return false;





});


















});