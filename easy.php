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
<form action="push.php">
  <div>
    <input type="text">
    <input type="submit"><br>
    <input type="radio" name="corner" id="corner" value="Red" checked> 1
	  <input type="radio" name="corner" id="corner" value="Blue"> 2
  </div>
</form>
<span></span>
 
<script>
$( "form" ).submit(function( event ) {
var co = getRadioVal("corner");
  if ( $( "input:first" ).val() === "correct" ) {
    $( "span" ).text( "Validated..." ).show();
    return;
  }
 
  $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
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
