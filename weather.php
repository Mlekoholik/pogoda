<?php

include_once 'vendor/autoload.php';

use Spogon\Component\Weather\Api;
use vendor\kriswallsmith\buzz\lib;

$weather = new Api(new Buzz\Browser(),'Krakow');
$weather->getJSONweather();
echo $weather->cityName.": ".$weather->cityTemp." &deg;C";