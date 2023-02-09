<?php

namespace Pattern;

require 'proxy.php';

class ProxyTest extends \PHPUnit_Framework_TestCase
{
    public function testProxy()
    {
        $expect = "<strong>I’ll be back!</strong>";

        $proxy = new Proxy();

        $result = $proxy->send();

        $this->assertEquals($result, $expect);
    }
}