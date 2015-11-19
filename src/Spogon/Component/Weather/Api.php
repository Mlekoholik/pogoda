<?php

namespace Spogon\Component\Weather;

class Api {
    private $city;
    private $weather;
    
    public $cityName;
    public $cityTemp;
    
    public function __construct($weather,$city) {
        $this->weather = $weather;
        $this->city = $city;
        $this->cityName = "";
        $this->cityTemp = "";
    }

    public function getJSONweather() {
        $response = $this->weather->get("http://api.openweathermap.org/data/2.5/weather?q=".$this->city."&APPID=96cdeb166e66f9c035e9e7f8ce665ec8");
        $data = json_decode($response->getContent());
        $kelvin = round($data->main->temp);
        $temp = round($kelvin - 273.15);
        $this->cityTemp = $temp;
        $this->cityName = $data->name;
        //echo $data->name.": ".$temp." &deg;C\n";
    }
}


