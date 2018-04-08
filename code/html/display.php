<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/6
 * Time: 5:04
 */

require("getLocation.php");
require("constants.php");
$number = $distance = $type_plat = $city = $drink = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST["number"];
    $distance = $_POST["distance"];
    $type_plat = $_POST["type_plat"];
    $city = $_POST["city"];
    $drink = $_POST["drink"];

}

$location = getLocation($city);
$lat = $location['lat'];
$lng = $location['lng'];
$loca = "{$lat}" . ',' . "{$lng}";


$restaurant_data =
    array("location" => $loca,
        "type" => "restaurant",
        "radius" => $distance,
        "keyword" => $type_plat,
        "key" => $key);
$restaurant_params = http_build_query($restaurant_data);

$restaurant_url = $base_url_near_by_search . $restaurant_params;
$bar_data = null;
if ($drink = "vin") {
    $bar_data =
        array("location" => $loca,
            "type" => "bar",
            "radius" => $distance,
            "keyword" => "vin",
            "key" => $key);
} else {
    $bar_data =
        array("location" => $loca,
            "type" => "café",
            "radius" => $distance,
            "keyword" => "café",
            "key" => $key);
}
$bar_params = http_build_query($bar_data);

$bar_url = $base_url_near_by_search . $bar_params;


$night_club_data =
    array("location" => $loca,
        "type" => "night_club",
        "radius" => $distance,
        "keyword" => "Boîte-de-nuit",
        "key" => $key);

$night_club_params = http_build_query($night_club_data);

$night_club_url = $base_url_near_by_search . $night_club_params;

echo $restaurant_url."<br>";
echo $bar_url."<br>";
echo $night_club_url."<br>";

//echo getDataByUrl($restaurant_url);

function getDataByUrl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

?>