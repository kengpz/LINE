<!DOCTYPE HTML>
<html>
<body>
<?php
if($_POST){
$signData = hash_hmac('sha1', $_POST['data'],'0JUM9EL2FP5TZ6UXQZQ9EATZJX3D1W2R',false);
$signData= strtoupper($signData);
echo ($signData);
}else {
	echo "Not post data";
?>
</body>
</html>
