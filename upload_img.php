<html>
<head>		
<script src="js/jquery.min.js"></script>
</head>
<body>
<form name="i_form" method="post" enctype="multipart/form-data" action="submit_img.php">
<table>
	<tr>
		<td>Image of Event</td>
		<td><input type="file" id="file" name="image" onBlur="capture()" /></td>
		<td><p id="a_img"></p></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="button" id="uploadimage" value="Upload Pic" onclick="check()"/></td>
	</tr>
</table>
	</form>
	
<div id="image_preview">
	<img id="previewing" src="images/noimage.png" alt="no image" />
</div>

<p id="p1"></p>

<script>
	function check()
	{
		document.i_form.submit();
	}
$(document).ready(function (e) {
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