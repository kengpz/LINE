<?php
$access_token = 'Yw6tWtkv3WgTuN8M91TVj5VRweXLD2kRYQz8ZZh7R3SxbH3j0h7jVca9z22kq0EPin//YCxwx4zLeGO3eDtcxOUs8VkVynNrBJIC6+e4kOuvl3mtqid3nWaViDYUycsjEmDrwi1Czkr6/OIUdjkDJQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
