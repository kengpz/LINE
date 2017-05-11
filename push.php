<?php
$msg = $_GET["msg"]; 
$strAccessToken = "CUwlk0hS8W7XsdJ0FBpqEufyGplNRYr8y9EdwRqHh7HxzJQu+9PV8WvS5QzrCx2CvD3RXVsLmGKbW/lGt7OtwSDJc+UJqbV76YFasGzy/s6ewHL3CiYMi5aU2VX5VWn+Nxwe5oLTq0kC3EFYY3kZNgdB04t89/1O/w1cDnyilFU=";
echo $msg;
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "C38b5b940c47dade38c04eb701a98208b";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "Send message : " . $msg ;
 
 
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
 
?>
