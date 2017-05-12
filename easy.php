<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>submit demo</title>
  <style>
  p {
    margin: 0;
    color: blue;
  }
  div,p {
    margin-left: 10px;
  }
  span {
    color: red;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<p>Type 'correct' to validate.</p>
<form action="push.php" method="POST">
  <div>
    <input type="text" name="msg">
    <input type="submit"><br>
    <input type="radio" name="corner" id="corner" value="แดงต่อ" checked> 1
    <input type="radio" name="corner" id="corner" value="น้ำเงินต่อ"> 2
  </div>
</form>
<span></span>
 
<script>
$( "form" ).submit(function( event ) {
var co = getRadioVal("corner");
  if ( $( "input:first" ).val() !== "" ) {
    $( "span" ).text("".$co.$msg ).show();
    return;
  }

  event.preventDefault();
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
 
</body>
</html>
