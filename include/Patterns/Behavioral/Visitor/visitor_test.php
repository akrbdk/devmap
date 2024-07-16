<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'visitor.php';

class VisitorTest extends PHPUnit_Framework_TestCase
{
    public function testVisitor()
    {
        $expect = "Buy sushi...Buy pizza...Buy burger...";

        $city = new City();

        $city->add(new SushiBar());
        $city->add(new Pizzeria());
        $city->add(new BurgerBar());

        $result = $city->accept(new People());

        $this->assertEquals($result, $expect);
    }
}
