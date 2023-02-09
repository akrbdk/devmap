<?php

namespace Pattern;

require 'composite.php';

class CompositeTest extends \PHPUnit_Framework_TestCase
{
    public function testComposite()
    {
        $expect = "/root\n/root/usr\n/root/usr/B\n/root/A\n";

        $rootDir = new Directory("root");

        $usrDir = new Directory("usr");
        $fileA = new File("A");

        $rootDir->add($usrDir);
        $rootDir->add($fileA);

        $fileB = new File("B");

        $usrDir->add($fileB);

        $result = $rootDir->show("");

        $this->assertEquals($result, $expect);
    }
}