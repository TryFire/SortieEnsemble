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

/*$a1 = array("name"=>"x'u", "address"=>"anto", "lat"=>'-33.841034', "lng"=>'151.179936', "type"=>"restaurant", "place_id"=>"111", "photo_url"=>"ppp");
$a2 = array("name"=>"liu", "address"=>"antao", "lat"=>'-33.821034', "lng"=>'151.271936', "type"=>"restaurant", "place_id"=>"222", "photo_url"=>"1ppp");
$a3 = array("name"=>"he", "address"=>"aneto", "lat"=>'-33.811034', "lng"=>'151.131936', "type"=>"restaurant", "place_id"=>"333", "photo_url"=>"2ppp");

$data = array($a1,$a2,$a3);

save($data);*/

/*$a1 = array("name"=>"xu", "address"=>"anto", "lat"=>'-33.841034', "lng"=>'151.179936', "type"=>"restaurant", "place_id"=>"111", "photo_url"=>"ppp");
save($a1);*/


function save($array){
    if (count($array) == 0) {

    } else {
        global $u, $p, $d;
        $conn = mysqli_connect("localhost", $u, $p, $d);
        if (!$conn) {
            //echo "die";
            //die("can not connect to MySql");
        }

        //$sql = "";
        foreach ($array as $x => $value) {
            $name = addslashes($value['name']);
            $address = $value['address'];
            $lat = $value['lat'];
            $lng = $value['lng'];
            $type = $value['type'];
            $place_id = $value['place_id'];
            $photo_url = $value['photo_url'];
            $sql = "INSERT IGNORE INTO sortir.markers (name, address, lat, lng, type, place_id, photo_url) values ('{$name}','{$address}','{$lat}','{$lng}','{$type}','{$place_id}','{$photo_url}');";

            if ($conn->query($sql) === true) {
                //echo "insert success"."<br>";
            } else {
                //echo "failed";
            }
        }

        //echo $sql.'\n';


        $conn->close();
    }
}

function mysql_string($array) {

    $after = array();
    foreach ($array as $x => $value) {
        //$after[$x] = @mysqli_real_escape_string($value);
        $after[$x] = addslashes($value);
    }
    return $after;

}



?>