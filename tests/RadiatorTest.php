<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use iut\Radiator;
use iut\Thermometer;

use \Mockery\Adapter\Phpunit\MockeryTestCase;

require __DIR__ . '/../vendor/autoload.php';

class RadiatorTest extends MockeryTestCase
{
    public function testUpdateThermostat()
    {
        /*$radiator = new Radiator(new Thermometer());

        
        */
        

        $it = \Mockery::mock('iThermometer');
        $it->shouldReceive('outsideTemperature')
        ->times(1)
        ->andReturn(3);
        $radiator = new Radiator($it);
        $radiator->updateThermostatFromOutsideTemperature();
        $this->assertSame(3, $radiator->thermostat);

    }

}
