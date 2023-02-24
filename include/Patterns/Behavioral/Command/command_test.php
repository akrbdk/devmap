<?php

namespace Pattern;

require 'command.php';

class CommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCommand()
    {
        $expect = "Toggle On" . "Toggle Off";

        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->storeCommand(new ToggleOnCommand($receiver));
        $invoker->storeCommand(new ToggleOffCommand($receiver));

        $result = $invoker->execute();

        $this->assertEquals($result, $expect);
    }
}