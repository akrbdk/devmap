<?php

namespace Pattern;

require 'strategy.php';

class StrategyTest extends \PHPUnit_Framework_TestCase
{
    public function testStrategy()
    {
        $data1 = [8,2,6,7,1,3,9,5,4];
        $data2 = [8,2,6,7,1,3,9,5,4];

        $ctx = new Context();

        $ctx->algorithm(new BubbleSort());

        $ctx->sort($data1);

        $ctx->algorithm(new InsertionSort());

        $ctx->sort($data2);

        $expect = "1,2,3,4,5,6,7,8,9";

        $result1 = join(",", $data1);
        $result2 = join(",", $data2);

        $this->assertEquals($result1, $expect);
        $this->assertEquals($result2, $expect);
    }
}
