<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/27
 * Time: 21:01
 */
require("getLocation.php");
$city = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $city = $_POST['city'];
}
$location = getLocation($city);
echo json_encode(array("results"=>$location));


?>