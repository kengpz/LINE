<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="2000">
<title>Test iframe refresh</title>
<script>
   var src = $('#dataframe').attr('src');
   var dsrc = $('#dataframe').attr('data-src');
   setInterval(function () {
        $('#dataframe').remove();
        var iframe_html = '<iframe src="'+ src +'" frameborder="0" style="width:7300px;height:500px;"></iframe>';
        $('#iframe').html(iframe_html);
    }, 10000);
</script>
</head>

<body>
<h3>Test iframe</h3>
    <span id="iframe">
    <iframe data-src="https://www.xn--o3cea3afbwl1da3wf0i.com/poll/open18_muay.php" id="dataframe" frameborder="0" src="https://www.xn--o3cea3afbwl1da3wf0i.com/poll/open18_muay.php" style="width:700px;height:500px;"></iframe>
    </span>
   <span id="showsrc"></span>
   <span id="showdsrc"></span>
</body>
</html>
