<?php

namespace Pattern;

require 'facade.php';

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    public function testFacade()
    {
        $expect = "Build house\nTree grow\nChild born";

        $man = new Man();

        $result = $man->todo();

        $this->assertEquals($result, $expect);
    }
}
