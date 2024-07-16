<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'factory_method.php';

class FactoryMethodTest extends PHPUnit_Framework_TestCase
{
    public function testFactoryMethod()
    {
        $assert = ['A', 'B', 'C'];

        $factory = new ConcreteCreator();

        $products = [
            $factory->createProduct('A'),
            $factory->createProduct('B'),
            $factory->createProduct('C'),
        ];

        foreach ($products as $index => $product) {
            $this->assertEquals($product->useProduct(), $assert[$index]);
        }
    }
}