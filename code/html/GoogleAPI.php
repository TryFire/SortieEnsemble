<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/5
 * Time: 16:59
 */

require ("constants.php");
class GoogleAPI
{
    private $number;
    private $distance;
    private $type_plat;
    private $city;
    private $drink;

    /**
     * GoogleAPI constructor.
     * @param $number
     * @param $distance
     * @param $type_plat
     * @param $city
     * @param $drink
     */
    public function __construct($number, $distance, $type_plat, $city, $drink)
    {
        $this->number = $number;
        $this->distance = $distance;
        $this->type_plat = $type_plat;
        $this->city = $city;
        $this->drink = $drink;
    }

    public function getData(){

    }


}