<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'adapter.php';

class AdapterTest extends PHPUnit_Framework_TestCase
{
    public function testAdapter()
    {
        $adapter = new Adapter();

        $req = $adapter->Request();

        $this->assertEquals($req, 'Request');
    }
}