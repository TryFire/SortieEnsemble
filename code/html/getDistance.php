<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/28
 * Time: 3:42
 */
require ("constants.php");

$restaurant = $bar = $night_club = "";
/*if ($_REQUEST['REQUEST_METHOD'] == "POST") {
    $restaurant = $_POST['restaurant'];
    $bar = $_POST['bar'];
    $night_club = $_POST['night_club'];
}*/

$restaurant = "Udon Jubey";
$bar = "Le Quinze Vins Paris";
$night_club = "L'insolite Club Discothèque";

$distance_data = array(
    "units"=>"metric",
    "origins" => $bar."|".$restaurant,
    "destinations"=>$restaurant."|".$night_club,
    "mode"=>"walking",
    "language"=>"fr-FR",
    "key"=>$key);
$parameters = http_build_query($distance_data);
$url = $base_url_distance.$parameters;
$response = getDataByUrl($url);
echo json_encode(array("results"=>decode_json_to_array($response)));

function decode_json_to_array($data) {
    $results = json_decode($data, true);
    //var_dump($results);
    $status = $results['status'];
    if ($status == "OK") {
        $rows = $results['rows'];
        $r0 = $rows[0];
        $r1 = $rows[1];
        $ebar_to_restaurant = $r0['elements'][0];
        $ebar_to_club = $r0['elements'][1];
        $erestaurant_to_club = $r1['elements'][1];

        $distance_bar_to_restaurant = $ebar_to_restaurant['distance']['text'];
        $distance_bar_to_club = $ebar_to_club['distance']['text'];
        $distance_restaurant_to_club = $erestaurant_to_club['distance']['text'];
        $duration_bar_to_restaurant = $ebar_to_restaurant['duration']['text'];
        $duration_bar_to_club = $ebar_to_club['duration']['text'];
        $duration_restaurant_to_club = $erestaurant_to_club['duration']['text'];

        $result_bar_to_restaurant = array("distance"=>$distance_bar_to_restaurant, "duration"=>$duration_bar_to_restaurant);
        $result_bar_to_club = array("distance"=>$distance_bar_to_club, "duration"=>$duration_bar_to_club);
        $result_restaurant_to_club = array("distance"=>$distance_restaurant_to_club, "duration"=>$duration_restaurant_to_club);

        return array("bar_to_restaurant"=>$result_bar_to_restaurant,
            "bar_to_club"=>$result_bar_to_club,
            "restaurant_to_club"=>$result_restaurant_to_club);
    }
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