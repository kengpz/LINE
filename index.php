<!DOCTYPE html>
<html>
<body>

<form method="post" name="form" action="push.php">
<ul><li>
<input id="msg" name="msg" type="text" />
</li></ul>

	<div >
	Message :  <br>
	<input type="submit" value="Submit" class="submit"/>
	<span class="error" style="display:none"> Please Enter Valid Data</span>
	<span class="success" style="display:none"> Registration Successfully</span>
	</div>
</form>

</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript" >
$(function() {
$(".submit").click(function() {
var name = $("#msg").val();

if(name==''){
	$('.success').fadeOut(200).hide();
	$('.error').fadeOut(200).show();
}else {
	$.ajax({
	type: "POST",
	url: "push.php",
	data: name,
	success: function(){
		$('.success').fadeIn(200).show();
		$('.error').fadeOut(200).hide();
		}
	});
}
return false;
});
});
</script>
</html>
