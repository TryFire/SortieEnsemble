<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/5/22
 * Time: 21:35
 */

require ("constants.php");
require ("getLocation.php");
$u = $username;
$p = $password;
$d = $database;

$email = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
}

echo json_encode(findTriplets($email));

function findTriplets($email)
{
    global $u, $p, $d;
    $conn = mysqli_connect("localhost", $u, $p, $d);
    if (!$conn) {
        die("can not connect to MySql");
    }

    $sql = "select * from {$d}.triplet where email = '{$email}'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $city = $row['city'];
        $location = getLocation($city);
        $restaurant = $row['restaurant'];
        $night_club = $row['night_club'];
        $bar = $row['bar'];
        $triplet = array("city" => $city, "restaurant"=>$restaurant, "night_club"=>$night_club, "bar"=>$bar, "location"=>$location);
        return array("status"=>"1", "triplet"=>$triplet);
    } else {
        return array("status"=>"-1", "triplet"=>array("city" => "", "restaurant"=>"", "night_club"=>"", "bar"=>""));
    }
}

?>