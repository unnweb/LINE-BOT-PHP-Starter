<?php // 
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:UyMkhTYQd1jPe6l';

$access_token = 'uw5hXwvPLk10iAQ0p5IBohxg5wEAVyO5+SZ6YJO3abg/10A5VS/MgoqfjTBTk5YPe6V954pvMf9Vl65tFc/okyLgtpx2abFMutUkG4T/XX03VOMmS01zPiWMS87iYbkHicbin5qJwUYQuevGVK4OvQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
