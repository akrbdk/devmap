<?php

namespace Pattern;

require 'state.php';

class StateTest extends \PHPUnit_Framework_TestCase
{
    public function testState()
    {
        $expect = "Vrrr... Brrr... Vrrr..." .
                  "Vrrr... Brrr... Vrrr..." .
                  "Белые розы, Белые розы. Беззащитны шипы...";

        $modile = new ModileAlert(new MobileAlertVibration());

        $result  = $modile->alert();
        $result .= $modile->alert();

        $modile->setState(new MobileAlertSong());

        $result .= $modile->alert();

        $this->assertEquals($result, $expect);
    }
}