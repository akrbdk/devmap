<?php

namespace Pattern;

require 'iterator.php';

class IteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testIterator()
    {
        $shelf = new BookShelf();

        $books = ["A", "B", "C", "D", "E", "F"];

        foreach ($books as $book) {
            $shelf->add(new Book($book));
        }

        $i = 0;
        $iterator = $shelf->iterator();
        while ($iterator->hasNext()) {
            $elm = $iterator->next();
            $this->assertEquals($elm->name, $books[$i++]);
        }
    }
}