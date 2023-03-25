<?php

namespace Pattern;

require 'singleton.php';

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testSingleton()
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();

        $this->assertEquals($instance1, $instance2);
    }

}
