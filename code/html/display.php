<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/6
 * Time: 5:04
 */

require("getLocation.php");
require("constants.php");
require ("saveResults.php");
$number = $distance = $type_plat = $city = $drink = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST["number"];
    $distance = $_POST["distance"];
    $type_plat = $_POST["type_plat"];
    $city = $_POST["city"];
    $drink = $_POST["drink"];
}
/*$number = "5";
$distance = "500";
$type_plat = "italien";
$city = "1ER+Paris";
$drink = "vin";*/


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
if ($drink == "vin") {
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

//echo $restaurant_url."<br>";
//echo $bar_url."<br>";
//echo $night_club_url."<br>";

$restaurant_json= getDataByUrl($restaurant_url); //get results(restaurant) from google
$restaurant = decodeJsonToArray($restaurant_json, "restaurant"); //decode results to array

$bar_json = getDataByUrl($bar_url); //get results(bar) from google
$bar = decodeJsonToArray($bar_json, "bar"); //decode results to array

$night_club_json = getDataByUrl($night_club_url); //get results(night_club) from google
$night_club = decodeJsonToArray($night_club_json, "night_club"); //decode results to array



echo json_encode(array("results"=>array("restaurant"=>$restaurant, "bar"=>$bar, "night_club"=>$night_club, "location"=>$location)));
save($restaurant);
save($bar);
save($night_club);

function decodeJsonToArray($json, $type) {
    $result = json_decode($json,true);

    $results = $result['results'];
    //var_dump($results);
    $array = array();
    /*echo count($results);
    echo "<br>";*/
    if (count($results) > 0) {
        foreach ($results as $x => $x_value) {
            $r_lat = $x_value['geometry']['location']['lat'];
            $r_lng = $x_value['geometry']['location']['lng'];
            $r_name = $x_value['name'];
            $r_place_id = $x_value['place_id'];
            $r_address = $x_value['vicinity'];
            $r_photo = "";
            if (array_key_exists("photos", $x_value)) {
                $r_photo = $x_value['photos'][0]['photo_reference'];
            }
            global $key;
            global $base_url_photo_search;

            $photo_url = "";
            if ($r_photo == "") {

            } else {
                $photo_param = http_build_query(array("photoreference"=>$r_photo, "key"=>$key, "maxwidth"=>200, "maxheight"=>200));
                $photo_url = $base_url_photo_search.$photo_param;
            }
            //echo "<a href='$photo_url'>look photo</a>>";

            $a1 = array("name"=>$r_name, "address"=>$r_address, "photo_url"=>$photo_url,
                "lat"=>$r_lat, "lng"=>$r_lng, "place_id"=>$r_place_id, "type"=>$type);
            $array[$x] = $a1;
        }
    }
    return $array;
}

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