<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<title>Muaythai Demo</title>
</head>
<body>
	<div class="container-fluid">
	<form action="/" id="priceForm" method="post">
		<div class="row">
			<div class="col-xs-offset-4 col-xs-3" style="background-color:red">
				<input type="radio" name="corner" value="แดงต่อ" checked> แดง
			</div>
			<div class="col-xs-offset-3 col-xs-2" style="background-color:blue">
				<input type="radio" name="corner" value="น้ำเงินต่อ"> น้ำเงิน
			</div>
		</div>
		<div class="row">
			<button type="button" class="btn btn-success btn-lg">
				<span class="glyphicon glyphicon-ok-sign"></span>Login
			</button>
		</div>
			<br> <br> <br>
			<label>ราคา : </label> <input type="number" name="msg" id="msg"><br><br>

			<button type="button" onclick="up()">up</button>
			<button type="button" onclick="down()">down</button>
			<br> <br> <br> 
			
			<button type="submit" name="Send" id="Send" class="btn btn-success btn-lg"autofocus>
				<span class="glyphicon glyphicon-ok-sign"></span> Send
			</button>

	</form>
	</div>
	<!-- the result of the search will be rendered inside this div -->
	<div id="result"></div> <br>

	<div align="center" class="frame-data"> 
	<div class="nano">
	<div class="nano-content">
		<iframe data-src="https://www.xn--o3cea3afbwl1da3wf0i.com/poll/open18_muay.php" id="dataframe" width="100%"  height="100%" frameborder="0" class="lazy-loaded" src="https://www.xn--o3cea3afbwl1da3wf0i.com/poll/open18_muay.php" style=" width: 700px; height:500px; "></iframe>
	</div>
	</div>
	</div>

	<script type="text/javascript" charset="utf-8">
// Attach a submit handler to the form
		$( "#priceForm" ).submit(function( event ) {
			var co = getRadioVal("corner");
			// Stop form from submitting normally
			event.preventDefault();
 
			// Get some values from elements on the page:
			var $form = $( this ),
				price = $form.find( "input[name='msg']" ).val(),
				url = "push.php";
					
			// Send the data using post
			var posting = $.post( url, { msg: price, corner: co} );
			
			// Put the results in a div
			posting.done(function( data ) {
				var content = $( data ).find( "#content" );
				$( "#result" ).empty().append( content );
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
function up() {
 document.forms['priceForm']['msg'].stepUp(1);
}
function down() {
 document.forms['priceForm']['msg'].stepUp(-1);
}
</script>

</body>
</html>
