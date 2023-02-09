<?php
/**
 * Паттерн Итератор (Iterator)
 */

namespace Pattern;

/**
 * Интерфейс Iterator, описывает общий интерфейс для итераторов.
 */
interface Iterator
{
    /**
     * Возвращает следующий элемент
     *
     * @return mixed
     */
    public function next();

    /**
     * Проверяет доступность следующего элемента
     *
     * @return bool
     */
    public function hasNext();
}

/**
 * Интерфейс Aggregate, описывает общий интерфейс для коллекций.
 */
interface Aggregate
{
    /**
     * Создает и возвращает итератор по коллекции
     *
     * @return Iterator
     */
    public function iterator();
}

/**
 * BookIterator (ConcreteIterator), реализует итератор по книжной полке
 */
class BookIterator implements Iterator
{
    /**
     * @var BookShelf
     */
    protected $shelf;

    /**
     * @var int
     */
    protected $current = 0;

    /**
     * Конструктор
     *
     * @param BookShelf $shelf - книжная полка
     */
    public function __construct(BookShelf $shelf)
    {
        $this->shelf = $shelf;
    }

    /**
     * Возвращает следующий элемент
     *
     * @return mixed
     */
    public function next()
    {
        return $this->shelf->books[$this->current++];
    }

    /**
     * Проверяет доступность следующего элемента
     *
     * @return bool
     */
    public function hasNext()
    {
        return ($this->current < count($this->shelf->books));
    }
}

/**
 * BookShelf (ConcreteAggregate), реализует книжную полку (коллекцию элементов)
 */
class BookShelf implements Aggregate
{
    /**
     * @var []Book
     */
    public $books = array();

    /**
     * Создает и возвращает итератор по коллекции
     *
     * @return Iterator
     */
    public function iterator()
    {
        return new BookIterator($this);
    }

    /**
     * Добавляет элемент в коллекции
     *
     * @param Book $book - книга (элемент коллекции)
     */
    public function add(Book $book)
    {
        $this->books[] = $book;
    }
}

/**
 * Book, реализует элемент коллекции
 */
class Book
{
    /**
     * @var string
     */
    public $name;

    /**
     * Конструктор
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
