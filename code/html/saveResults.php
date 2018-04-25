<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/26
 * Time: 5:16
 */
require ("constants.php");
$u = $username;
$p = $password;
$d = $database;

$a1 = array("name"=>"xu", "address"=>"anto", "lat"=>'-33.841034', "lng"=>'151.179936', "type"=>"restaurant");
$a2 = array("name"=>"liu", "address"=>"antao", "lat"=>'-33.821034', "lng"=>'151.271936', "type"=>"restaurant");
$a3 = array("name"=>"he", "address"=>"aneto", "lat"=>'-33.811034', "lng"=>'151.131936', "type"=>"restaurant");

$data = array($a1,$a2,$a3);

save($data);

function save($array){
    global $u, $p, $d;
    $conn = mysqli_connect("localhost", $u, $p, $d);
    if (!$conn) {
        echo "die";
        die("can not connect to MySql");
    }

    $sql = "";
    foreach ($array as $x => $value) {
        $name = $value['name'];
        $address = $value['address'];
        $lat = $value['lat'];
        $lng = $value['lng'];
        $type = $value['type'];
        $sql .= "INSERT IGNORE INTO sortir.markers (name, address, lat, lng, type) values ('{$name}','{$address}','{$lat}','{$lng}','{$type}');";
    }

    echo $sql;

    if ($conn->multi_query($sql) === true){
        echo "insert success";
    } else {
        echo "failed";
    }

}



?>