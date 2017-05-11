<!DOCTYPE html>
<html>
<head></head>
<body>   
<div class="content">
    <form id="priceForm" name="priceForm" action="push.php" method="POST">
        <label>Message: </label>
        <input name="msg" type="text" /><br><br>

	<div align="center" style="width:82px; margin-top:2px">
		<a href="" class="button" id="send" style="width:100%;">
			<div class="left_border"></div><div class="button_text">Send</div><div class="right_border"></div>
		</a>
	</div>
    </form>
</div>
</body>
    	<script type="text/javascript" charset="utf-8">
		$("#send").click(function() {
			$("#priceForm").submit();
		});
	</script>
</html>
