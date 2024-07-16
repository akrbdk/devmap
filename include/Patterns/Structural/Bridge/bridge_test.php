<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'bridge.php';

class BridgeTest extends PHPUnit_Framework_TestCase
{
    public function testBridge()
    {
        $expect = "SssuuuuZzzuuuuKkiiiii";

        $car = new Car(new EngineSuzuki());

        $sound = $car->rase();

        $this->assertEquals($sound, $expect);
    }
}
