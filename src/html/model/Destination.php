<?php
/**
 * Created by PhpStorm.
 * User: Yuriko
 * Date: 2018/4/8
 * Time: 7:11
 */

class Destination
{
    public $type;// resto or bar or night_club
    public $place_id;
    public $address;
    public $name;
    public $photo_ref;

    public $lat;
    public $lng;

    /**
     * Destination constructor.
     * @param $type
     * @param $place_id
     * @param $address
     * @param $name
     * @param $photo_ref
     * @param $lat
     * @param $lng
     */
    public function __construct($type, $place_id, $address, $name, $photo_ref, $lat, $lng)
    {
        $this->type = $type;
        $this->place_id = $place_id;
        $this->address = $address;
        $this->name = $name;
        $this->photo_ref = $photo_ref;
        $this->lat = $lat;
        $this->lng = $lng;
    }


}