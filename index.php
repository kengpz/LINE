<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Muaythai Demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<form action="/" id="priceForm">
  <div class = "container"> 
     <div class = "form_group" align="center">   
      <label>ราคา : </label>  
      <input type="tel" name="msg" id="msg" placeholder="พิมพ์ราคาที่นี่">

      <br><br><br><br><br><br>
      <input type="submit" value="Enter" style="width:100px;">
    </div>
  </div>
</form>
<!-- the result of the search will be rendered inside this div -->
<div id="result"></div>
 
<script>
// Attach a submit handler to the form
$( "#priceForm" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    term = $form.find( "input[name='msg']" ).val(),
    url = "push.php";
 
  // Send the data using post
  var posting = $.post( url, { msg: term } );
 
  // Put the results in a div
  posting.done(function( data ) {
    var content = $( data ).find( "#content" );
    $( "#result" ).empty().append( content );
  });
});
</script>
 
</body>
</html>
