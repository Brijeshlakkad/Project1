<html>
<head>		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<form>
<table>
	<tr>
		<td>Image of Event</td>
		<td><input type="file" id="file" name="a_img" onBlur="capture()" /></td>
		<td><p id="a_img"></p></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" id="uploadimage" value="Upload Pic" /></td>
	</tr>
</table>
	</form>
<div id="image_preview">
	<img id="previewing" src="images/noimage.png" alt="no image" />
	<h4 id='loading' >loading..</h4>
</div>
<script>
	
$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#a_img").empty();
$('#loading').show();
$.ajax({
url: "handle_file.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$("#a_img").html(data);
}
});
}));

$(function() {
$("#file").change(function() {
$("#a_img").empty();
var file = this.files[0];

var match= ["image/jpeg","image/png","image/jpg"];
if(!((file.type==match[0]) || (file.type==match[1]) || (file.type==match[2])))
{
$('#previewing').attr('src','images/noimage.png');
$("#a_img").html("<p id='error'>Please Select A valid Image File</p> <br> Only jpeg, jpg and png Images type allowed");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '200px');
$('#previewing').attr('height', '180px');
};
});
</script>
</body>
</html>