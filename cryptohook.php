<?php
$strAccessToken = "TRmL8E/pYjsx3FjlXSNsBfiSS9opDNiDZlkWdhMhzVivXYfx3lJq19vtvWDe6MF+pP21hy4AR7tqR71Atluh3MGViDX/B7X6H4aZtcubapd1ESnu8f8g38jy3x75INjre4cGjaXf6bxncLTqfru4hAdB04t89/1O/w1cDnyilFU=";
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "getuserid"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = $arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "getgroupid"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = $arrJson['events'][0]['source']['groupId'];
}else if($arrJson['events'][0]['message']['text'] == "btc"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['pairing'][0]['id'] = "1";
}else if($arrJson['events'][0]['message']['text'] == "eth"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['pairing'][0]['id'] = "21";
}else if($arrJson['events'][0]['message']['text'] == "xrp"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['pairing'][0]['id'] = "25";
}else if($arrJson['events'][0]['message']['text'] == "omg"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['pairing'][0]['id'] = "26";
}else if($arrJson['events'][0]['message']['text'] == "evx"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['pairing'][0]['id'] = "28";
}

$url_req = "https://linews.herokuapp.com/webhook/webhook.jsp";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url_req);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
