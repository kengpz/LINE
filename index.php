<!DOCTYPE html>
<html>
<head></head>
<body>   
<div class="content">
    <form id="priceForm" name="priceForm" action="push.php" method="POST">
        <label>Message: </label>
        <input name="msg" type="text" /><br><br>

        <input name="send" type="send" value="Send!" />
    </form>
</div>
</body>
    <script type="text/javascript" charset="utf-8">
			$("#send").click(function() {
				$("#priceForm").submit();
			});
	</script>
</html>
