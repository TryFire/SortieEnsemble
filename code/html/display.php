<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/6
 * Time: 5:04
 */
/*$number = $distance = $type_plat = $city = $drink = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST["number"];
    $distance = $_POST["distance"];
    $type_plat = $_POST["type_plat"];
    $city = $_POST["city"];
    $drink = $_POST["drink"];

}*/
echo "start";
echo "<br>";
$url = "https://github.com/search?q=react";
echo $url;
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
// $output contains the output string
$output = curl_exec($ch);

//echo output
echo $output;   // close curl resource to free up system resources
curl_close($ch);


echo "finir";
?>