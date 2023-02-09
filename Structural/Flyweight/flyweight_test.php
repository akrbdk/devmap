<?php

namespace Pattern;

require 'flyweight.php';

class FlyweightTest extends \PHPUnit_Framework_TestCase
{
    public function testFlyweight()
    {
        $expect = "My name: Jeck";

        $factory = new FlyweightFactory();

        $flyweight_1 = $factory->getFlyweight(1);
        $flyweight_2 = $factory->getFlyweight(2);
        $flyweight_3 = $factory->getFlyweight(3);

        $flyweight_1->setName("Jim");
        $flyweight_2->setName("Jeck");
        $flyweight_3->setName("Jill");

        $flyweight_n = $factory->getFlyweight(2);

        $result = $flyweight_n->getName();

        $this->assertEquals($result, $expect);
    }
}