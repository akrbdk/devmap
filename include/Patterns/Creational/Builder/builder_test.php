<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'builder.php';

class BuilderTest extends PHPUnit_Framework_TestCase
{
    public function testBuilder()
    {
        $expect = "<header>Header</header>\n" +
            "<article>Content</article>\n" +
            "<footer>Footer</footer>\n";

        $product = new Product();

        $director = new Director(new ConcreteBuilder($product));
        $director->construct();

        $result = $product->show();

        $this->assertEquals($result, $expect);
    }
}