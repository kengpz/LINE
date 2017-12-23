<?php
$msg = 'xx';
$sat = '';
$to = '';

if($_POST) {
 $msg = $_POST['msg'];
 $to = $_POST['to'];
 $cat= $_POST['cat'];
} else {
 $msg = $_GET['msg'];
 $to = $_GET['to'];
 $cat= $_GET['cat'];
}

$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$cat}";

$arrPostData = array();
$arrPostData['to'] = $to;
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = $msg ;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

echo "200 : " .$msg;
?>
