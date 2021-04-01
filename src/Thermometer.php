<?php

namespace swkberlin;
use Exception;
use iThermometer;

class Thermometer implements iThermometer
{
    function __construct() {
        throw new Exception('Don\'t call me directly, use a test double instead !');
    }

    public function outsideTemperature() {
        throw new Exception('Don\'t call me directly, use a test double instead !');
    }
}

