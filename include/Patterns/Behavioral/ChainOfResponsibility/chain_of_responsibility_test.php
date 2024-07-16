<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'chain_of_responsibility.php';

class ChainOfResponsibilityTest extends PHPUnit_Framework_TestCase
{
    public function testChainOfResponsibility()
    {
        $expect = "Im handler 2";

        $handlers = new ConcreteHandlerA();

        $handlers->addHandler(new ConcreteHandlerB())
            ->addHandler(new ConcreteHandlerC());

        $result = $handlers->sendRequest(2);

        $this->assertEquals($result, $expect);
    }
}