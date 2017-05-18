<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="">
<title>Test iframe refresh</title>
<script>
window.setInterval("reloadIFrame();", 10000);

function reloadIFrame() {
 document.frames["dataframe"].location.reload();
}
</script>
</head>

<body>
<h3>Test iframe</h3>
    <span id="iframe">
    <iframe data-src="https://www.xn--o3cea3afbwl1da3wf0i.com/poll/open18_muay.php" id="dataframe"name="dataframe" frameborder="0" src="https://www.xn--o3cea3afbwl1da3wf0i.com/poll/open18_muay.php" style="width:700px;height:500px;"></iframe>
    </span>
 <input type="button">
   <span id="showsrc"></span>
   <span id="showdsrc"></span>
</body>
</html>
