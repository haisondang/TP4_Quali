<?php

namespace iut;
use Exception;
use iut\iThermometer;

class Thermometer implements iThermometer
{
    function __construct() {
        throw new Exception('Don\'t call me directly, use a test double instead !');
    }

    public function outsideTemperature() {
        throw new Exception('Don\'t call me directly, use a test double instead !');
    }
}

