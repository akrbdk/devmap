<?php

namespace Pattern;

require 'bridge.php';

class BridgeTest extends \PHPUnit_Framework_TestCase
{
    public function testBridge()
    {
        $expect = "SssuuuuZzzuuuuKkiiiii";

        $car = new Car(new EngineSuzuki());

        $sound = $car->rase();

        $this->assertEquals($sound, $expect);
    }
}
