<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use swkberlin\Radiator;
use swkberlin\Thermometer;

use \Mockery\Adapter\Phpunit\MockeryTestCase;

require __DIR__ . '/../vendor/autoload.php';

class RadiatorTest extends MockeryTestCase
{
    public function testUpdateThermostat()
    {
        $radiator = new Radiator(new Thermometer());

        $radiator->updateThermostatFromOutsideTemperature();

        $this->assertSame(3, $radiator->thermostat);
    }

}
