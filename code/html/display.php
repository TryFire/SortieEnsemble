<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/5
 * Time: 6:15
 */


$number = $distance = $type_plat = $city = $drink = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    /*if (empty($_POST['radio1'])) {
        echo "not get radio1";
    } else {
        echo $_POST['radio1'];
        echo "<br>";
        echo "get radio1";
    }*/
    echo $_POST["radio1"] . "<br>";
    echo $_POST["radio2"] . "<br>";
    echo $_POST["radio3"] . "<br>";
    echo $_POST["radio4"] . "<br>";
    echo $_POST["radio5"] . "<br>";
}


?>