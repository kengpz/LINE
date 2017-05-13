<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<title>Muaythai Demo</title>
</head>
<body>
	<div class="container-fluid">
	<form action="/" id="priceForm" method="post" role="form">
		<div class="row"></div>
		<br>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-4">
				<h3><span class="label label-primary label-lg"><input type="radio" name="corner" value="แดงต่อ" checked> แดง</span></h3>
			</div>
			<div class="col-xs-offset-2 col-xs-4">
				<h3><span class="label label-danger label-lg"><input type="radio" name="corner" value="น้ำเงินต่อ"> น้ำเงิน</span></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-2">
				<h3><span class="label label-default label-lg ">ราคา </span></h3>
			</div>
			<div class="col-xs-offset-1 col-xs-4">
				<input type="number" class="form-control col-xs-6" name="msg" id="msg">
			</div>
		</div>
			<br> <br> <br>

			<button type="button" class="btn btn-default btn-lg" onclick="up()">
				<span class="glyphicon glyphicon-triangle-top"></span> 
			</button>
			<button type="button" class="btn btn-default btn-lg" onclick="down()">
				<span class="glyphicon glyphicon-triangle-bottom"></span> 
			</button>
			<br> <br> <br> 
			
			<button type="submit" name="Send" id="Send" class="btn btn-success btn-lg"autofocus>
				<span class="glyphicon glyphicon-ok-sign"></span> Send
			</button>

	</form>
	</div>
	<!-- the result of the search will be rendered inside this div -->
	<div id="result"></div> <br>

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
