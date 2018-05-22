<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/5/22
 * Time: 2:23
 */
require ("constants.php");
$u = $username;
$p = $password;
$d = $database;

$email = "";
$city = "";
$restaurant = "";
$night_club = "";
$bar = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $city = $_POST['city'];
    $restaurant = addslashes($_POST['restaurant']);
    $night_club = addslashes($_POST['night_club']);
    $bar = addslashes($_POST['bar']);
}
/*echo $city."<br>";
echo $restaurant."<br>";
echo $night_club."<br>";
echo $bar."<br>";*/


/*
$to = "Symxuan@outlook.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "xinneng.xu@u-psud.fr";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";*/

saveTriplet($email, $city, $restaurant, $night_club, $bar);

function saveTriplet($email, $city, $restaurant, $night_club, $bar){
    global $u, $p, $d;
    $conn = mysqli_connect("localhost", $u, $p, $d);

    $sql = "INSERT INTO sortir.triplet (email, city, restaurant, night_club, bar) values ('{$email}','{$city}','{$restaurant}','{$night_club}','{$bar}')
    on duplicate key update city='{$city}', restaurant='{$restaurant}',night_club='{$night_club}',bar='{$bar}';";

    if ($conn->query($sql) === true) {
        echo json_encode(array("status"=>"1"));
        //echo "insert success"."<br>";
    } else {
        echo json_encode(array("status"=>"-1"));
        //echo "failed";
    }
}

?>