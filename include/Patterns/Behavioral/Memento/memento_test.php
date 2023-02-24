<?php

namespace Pattern;

require 'memento.php';

class MementoTest extends \PHPUnit_Framework_TestCase
{
    public function testMemento()
    {
        $originator = new Originator();
        $caretaker = new Caretaker();
        
        $originator->state = "On";
        
        $caretaker->memento = $originator->createMemento();
        
        $originator->state = "Off";
        
        $originator->setMemento($caretaker->memento);
        
        $this->assertEquals($originator->state, 'On');
    }
}