<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/8
 * Time: 17:11
 */

require ("constants.php");
$u = $username;
$p = $password;
$d = $database;

function getLocation($city_name)
{
    global $u, $p, $d;
    $conn = mysqli_connect("localhost", $u, $p, $d);
    if (!$conn) {
        die("can not connect to MySql");
    }

    $sql = "select * from {$d}.city where name = '{$city_name}'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lat = $row['lat'];
        $lng = $row['lng'];
        $location = array("lat" => $lat, "lng"=>$lng);
        return $location;
    } else {
        return array("lat" => 0.0, "lng"=>0.0);
    }

}

?>