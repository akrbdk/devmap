<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'observer.php';

class ObserverTest extends PHPUnit_Framework_TestCase
{
    public function testObserver()
    {
        $subject = new ConcreteSubject();

        $subject->attach(new ConcreteObserver());
        $subject->attach(new ConcreteObserver());
        $subject->attach($c = new ConcreteObserver());

        $subject->state = "New State...";

        $subject->Notify();

        $this->assertEquals($subject->state, $c->state);
    }
}