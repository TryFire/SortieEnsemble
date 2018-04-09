<?php
require ("constants.php");
    //echo "<a href='show_3places.html' target='_blank'>open map</a>";
$url = $bu_near_by_search."location=48.759255,2.302553&radius=5000&type=restaurant&keyword=barbecue&"."key=".$key;
$ch = curl_init();

echo $url;
// set url
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
$output = curl_exec($ch);
//echo output
echo $output;

// close curl resource to free up system resources
curl_close($ch);
?>