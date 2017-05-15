<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<title>Muaythai Demo</title>
<style>
#exprice {
	height: 60px;
	width: 85px;
}
</style>
</head>
<body>
	<div class="container-fluid">
	<form action="/" id="priceForm" method="post" role="form">
		<div class="row">
			<div class="col-xs-offset-1 col-xs-2">
				<a href="#" id="rateT"><h3><span class="label label-default"><input type="radio" name="rate" value="ต่อ" checked> ต่อ</span></h3></a>
			</div>
			<div class="col-xs-offset-1 col-xs-2">
				<a href="#" id="rateL"><h3><span class="label label-default"><input type="radio" name="rate" value="รอง"> รอง</span></h3></a>
			</div>
			<div class="col-xs-offset-1 col-xs-2">
				<a href="#" id="rateD"><h3><span class="label label-default"><input type="radio" name="rate" value="เสมอ"> เสมอ</span></h3></a>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-2">
				<a href="#" id="cornerR"><h3><span class="label label-danger"><input type="radio" name="corner" value="แดง" checked> แดง</span></h3></a>
			</div>
			<div class="col-xs-offset-1 col-xs-2">
				<a href="#" id="cornerB"><h3><span class="label label-primary"><input type="radio" name="corner" value="น้ำเงิน"> น้ำเงิน</span></h3></a>
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-5">
				<input type="number" class="form-control col-xs-6" name="msg" id="msg" style="margin-top: 6px;width:190px;" align="center">
			</div>
			<div class="col-xs-offset-1 col-xs-2" align="center">
				<button type="submit" name="Send" id="Send" class="btn btn-success btn-lg" style="width:120px;" autofocus>
					<span class="glyphicon glyphicon-ok-sign"></span> Send
				</button>
			</div>
		</div>
		<br> <br> <br> 
		<div class="row">
			<div class="col-xs-offset-1 col-xs-2">
				<button type="button" class="btn btn-default btn-lg" style="width:100px;" onclick="up()">
					<span class="glyphicon glyphicon-triangle-top"></span> 
				</button>
			</div>
			<div class="col-xs-offset-1 col-xs-2">
				<button type="button" class="btn btn-default btn-lg" style="width:100px;margin-left:15px;" onclick="down()">
					<span class="glyphicon glyphicon-triangle-bottom"></span> 
				</button>
			</div>
		</div>
		<br><br>
		<div class="row">
			
		</div>	
		<br><br><br>
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-pills" role="tablist">
				  <li id="exprice" rol="presentation" align="center" style="width:85px;"><a href="#" id="p109"><span class="badge" style="margin-top:10px;">10/9</span></a></li>
				  <li id="exprice" rol="presentation" align="center" style="width:85px;"><a href="#" id="p54"><span class="badge" style="margin-top:10px;">5/4</span></a></li>
				  <li id="exprice" rol="presentation" align="center" style="width:85px;"><a href="#" id="p118"><span class="badge" style="margin-top:10px;">11/8</span></a></li>
				  <li id="exprice" rol="presentation" align="center" style="width:85px;"><a href="#" id="p32"><span class="badge" style="margin-top:10px;">3/2</span></a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-pills" role="tablist">
				  <li id="exprice" rol="presentation" align="center" style="width:85px;"><a href="#" id="p53"><span class="badge" style="margin-top:10px;">5/3</span></a></li>
				  <li id="exprice" rol="presentation" align="center" style="width:85px;"><a href="#" id="p74"><span class="badge" style="margin-top:10px;">7/4</span></a></li>
				  <li id="exprice" rol="presentation" align="center" style="width:85px;"><a href="#" id="p52"><span class="badge" style="margin-top:10px;">5/2</span></a></li>
				  <li id="exprice" rol="presentation" align="center" style="width:85px;"><a href="#" id="p72"><span class="badge" style="margin-top:10px;">7/2</span></a></li>
				</ul>
			</div>
		</div>
	</form>
	</div>
	<!-- the result of the search will be rendered inside this div -->
	<div id="result"></div> <br>

	<script type="text/javascript" charset="utf-8">
// Attach a submit handler to the form
		document.getElementById('msg').value = 0;
		$( "#priceForm" ).submit(function( event ) {
			var co = getRadioVal("corner");
			var rate = getRadioVal("rate");
			// Stop form from submitting normally
			event.preventDefault();
 
			// Get some values from elements on the page:
			var $form = $( this ),
				price = $form.find( "input[name='msg']" ).val(),
				url = "push.php";
					
			// Send the data using post
			var posting = $.post( url, { 
				msg: price, 
				corner: co,
				rate: rate
			} );
			
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
$("#p109").click(function() {
  document.getElementById('msg').value = 109;
});
$("#p54").click(function() {
  document.getElementById('msg').value = 54;
});
$("#p118").click(function() {
  document.getElementById('msg').value = 118;
});
$("#p32").click(function() {
  document.getElementById('msg').value = 32;
});
$("#p53").click(function() {
  document.getElementById('msg').value = 53;
});$("#p74").click(function() {
  document.getElementById('msg').value = 74;
});
$("#p52").click(function() {
  document.getElementById('msg').value = 52;
});
$("#p72").click(function() {
  document.getElementById('msg').value = 7/2;
});
$("#rateT").click(function() {
  $("input[name='rate'][value='ต่อ']").attr("checked", true);
});
$("#rateL").click(function() {
   $("input[name='rate'][value='รอง']").attr("checked", true);
});$("#rateD").click(function() {
   $("input[name='rate'][value='เสมอ']").attr("checked", true);
});
$("#cornerR").click(function() {
   $("input[name='corner'][value='แดง']").attr("checked", true);
});
$("#cornerB").click(function() {
  $("input[name='corner'][value='น้ำเงิน']").attr("checked", true);
});
</script>

</body>
</html>
