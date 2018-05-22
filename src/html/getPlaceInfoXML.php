<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/7
 * Time: 0:09
 */

require("constants.php");

// Start XML file, create the parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
//open a connection to MySql
$connection = mysqli_connect("localhost", $username, $password, $database);
if (!$connection) {
    die('connection error'.$connection->connect_error);
}
$place = convertUrlQuery(urldecode($_SERVER['QUERY_STRING']));
#$place = ["Love.Fish", "Hunter Gatherer", "Nomad"];
#$place = convertUrlQuery($_SERVER['QUERY_STRING']);
header("Content-type: text/xml");

foreach ($place as $value){
    if ($value == null || $value == "") continue;
    $v = addslashes($value);
    $sql = "select * from markers where name = "."'{$v}'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $node = $dom->createElement("marker");
        $newnode = $parnode->appendChild($node);
        $newnode->setAttribute("name",$row['name']);
        $newnode->setAttribute("address", $row['address']);
        $newnode->setAttribute("lat", $row['lat']);
        $newnode->setAttribute("lng", $row['lng']);
        $newnode->setAttribute("type", $row['type']);
    }
}

echo $dom->saveXML();
$connection->close();
function convertUrlQuery($query)
{
    $queryParts = explode('&', $query);
    $params = array();
    foreach ($queryParts as $param) {
        $item = explode('=', $param);
        $params[$item[0]] = $item[1];
    }
    return $params;
}
?>