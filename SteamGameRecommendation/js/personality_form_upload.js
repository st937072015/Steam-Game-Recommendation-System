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
			
   $(".loading").css({"color": "#CE1141", "font-size": "16px"}).show();
    
	}
})
.done(function(upload_output) {
	console.log("upload_output");
    
    alert(upload_output);

    

    $(".loading").css({"color": "#CE1141", "font-size": "16px"}).hide();
    $("#upload-status").html(upload_output).show();

})
.fail(function() {

	console.log("error");

})
.always(function() {


});


return false;





});


















});