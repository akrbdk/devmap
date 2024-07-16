<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'template_method.php';

class TemplateMethodTest extends PHPUnit_Framework_TestCase
{
    public function testTemplateMethod()
    {
        $expect = "«Test String»";

        $qt = new FrenchQuotes();

        $result = $qt->Quotes("Test String");

        $this->assertEquals($result, $expect);
    }
}