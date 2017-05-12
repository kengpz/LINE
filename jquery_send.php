<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Muaythai Demo</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

<div id="main">
<h2>jQuery Ajax $.post() Method</h2>
<hr>

<form name="sample-form" id="sample-form" action="push.php" method="POST">
<input type="text" name="msg" id="msg" value="" /><br/>
<input type="radio" name="corner" value="แดงต่อ" checked> แดง
<input type="radio" name="corner" value="น้ำเงินต่อ"> น้ำเงิน
<br>
<input type="button" name="submit" id="submit" value="Submit" />
</form><p>
<div id="result"></div>

</body>
<script>
$('#submit').click(function(){
//validate form
 var co = getRadioVal("corner");
 var msg =  document.getElementById("msg").value;
 $.post('push.php',$('#sample-form').serialize(),function(response){
   document.getElementById("result").innerHTML = $co . $msg;
 });
});

function getRadioVal(radioName) {
	var rads = document.getElementsByName(radioName);
	for ( var rad in rads) {
	 if (rads[rad].checked)
	  return rads[rad].value;
	 }
	return null;
	}
</script>
</html>
