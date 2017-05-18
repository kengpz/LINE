<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test iframe refresh</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    setInterval(refreshIframe1, 10000);
    function refreshIframe1() {
        $("#Frame1")[0].src = $("#Frame1")[0].src;
    }
</script>
</head>

<body>
<h3>Test iframe</h3>
  <input type="input" style="width:200px;"><br>
 <iframe id="Frame1" src="https://www.xn--o3cea3afbwl1da3wf0i.com/poll/open18_muay.php" frameborder="0" style="width:700px;height:500px;"></iframe>

</body>
</html>
