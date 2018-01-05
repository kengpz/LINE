<?php

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$pairing = "0";
if($arrJson['events'][0]['message']['text'] == "getuserid"){
  $pairing = $arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "getgroupid"){
  $pairing = $arrJson['events'][0]['source']['groupId'];
}else if($arrJson['events'][0]['message']['text'] == "btc"){
  $pairing = "1";
}else if($arrJson['events'][0]['message']['text'] == "eth"){
  $pairing = "21";
}else if($arrJson['events'][0]['message']['text'] == "xrp"){
  $pairing = "25";
}else if($arrJson['events'][0]['message']['text'] == "omg"){
  $pairing = "26";
}else if($arrJson['events'][0]['message']['text'] == "evx"){
  $pairing = "28";
}else if($arrJson['events'][0]['message']['text'] == "allcur"){
  $pairing = "all";
}else {
 $pairing = "0";
}

$post = [
 'msg' => $pairing,
 'action' => "getprice"
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://linews.herokuapp.com/webhook/webhook.jsp');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
if($pairing != "0") $response = curl_exec($ch);
curl_close ($ch);

?>
