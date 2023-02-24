<?php

namespace Pattern;

require 'decorator.php';

class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    public function testDecorator()
    {
        $expect = "<strong>I am component!</strong>";

        $decorator = new ConcreteDecorator(new ConcreteComponent());

        $result = $decorator->Operation();

        $this->assertEquals($result, $expect);
    }
}