<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Muaythai Demo</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<form action="/" id="priceForm" method="post">
		<div class="container">
			<div class="form_group" align="center">
				<br> <br> <br>
				<label>ราคา : </label> <input type="number" name="msg" id="msg"><br><br>
				<input type="radio" name="corner" value="แดงต่อ" checked> แดง 
				<input type="radio" name="corner" value="น้ำเงินต่อ"> น้ำเงิน <br> <br> <br>
				
				<button onclick="up()">up</button>
				<button onclick="down()">down</button>
				<br> <br> <br> 

				<input type="submit" name="Send" id="Send" value="Enter" style="width: 100px;" autofocus>
			</div>
		</div>

	</form>
	<!-- the result of the search will be rendered inside this div -->
	<div id="result"></div>

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
