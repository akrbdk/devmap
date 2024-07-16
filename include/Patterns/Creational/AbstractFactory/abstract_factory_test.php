<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'abstract_factory.php';

class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testAbstractFactory()
    {
        $cocacolaFactory = new CocaColaFactory();

        $cocacolaWater = $cocacolaFactory->createWater(2.5);
        $cocacolaBottle = $cocacolaFactory->createBottle(2.5);

        $cocacolaBottle->interactWater($cocacolaWater);

        $this->assertEquals($cocacolaBottle->getWaterVolume(), $cocacolaBottle->getBottleVolume());
    }
}