<?php 
/*
$url = "http://www.mingxingqianguizezhihuang.com/1480.html"; 
$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL, $url); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10); 
$dxycontent = curl_exec($ch); 
echo $dxycontent; 

*/




$i = 1480;

$url = "http://www.mingxingqianguizezhihuang.com/$i.html"; 

echo $url;