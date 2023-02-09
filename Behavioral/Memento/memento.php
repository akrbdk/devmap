<?php
/**
 * Паттерн Хранитель (Memento)
 */

namespace Pattern;

/**
 * Originator, реализует хозяина состояния
 */
class Originator 
{
	/**
     * @var string
     */
    public $state;
    
    /**
     * Создает хранилище состояния
     *
     * @return Memento
     */
    public function createMemento() 
    {
        return new Memento($this->state);
    }

    /**
     * Восстанавливает состояние
     *
     * @param Memento $memento
     */
    public function SetMemento(Memento $memento) 
    {
        $this->state = $memento->getState();
    }
}

/**
 * Memento, реализует хранилище для состояния Originator
 */
class Memento 
{
	/**
     * @var string
     */
    protected $state;
    
    /**
     * Установить посредника
     *
     * @param string $state - состояние
     */
    public function __construct($state)
    {
        $this->state = $state;
    }
    
    /**
     * Получить состояние
     *
     * @return string
     */
    public function getState() 
    {
        return $this->state;
    }
}



/**
 * Caretaker, получает и хранит объект-хранитель (Memento),
 * пока он не понадобится хозяину.
 */
class Caretaker 
{
	/**
     * var Memento
     */
    public $memento;
}
