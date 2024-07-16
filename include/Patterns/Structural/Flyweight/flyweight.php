<?php
/**
 * Паттерн Приспособленец (Flyweight)
 */

namespace Pattern;

/**
 * Абстрактный базовый класс Flyweight, описывает общий интерфейс для приспособленцев
 */
abstract class Flyweighter
{
    /**
     * Получить имя приспособленца
     *
     * @return string
     */
    public abstract function getName();

    /**
     * Задать имя приспособленца
     *
     * @param string $name - имя
     */
    public abstract function setName($name);
}

/**
 * FlyweightFactory, реализует фабрику для создания приспособленцев.
 * Если подходящий приспособленец есть в пуле, то возвращает его
 */
class FlyweightFactory
{
    /**
     * @var []Flyweighter
     */
    public $pool = array();

    /**
     * Создание или получение подходящего приспособленца по состоянию.
     * В данном случает состояние это число, которое характеризует конкретного приспособленца
     *
     * @param int $state - состояние приспособленца
     *
     * @return Flyweighter
     */
    public function getFlyweight($state)
    {
        if (!array_key_exists($state, $this->pool)) {
            $this->pool[$state] = new ConcreteFlyweight($state);
        }

        return $this->pool[$state];
    }
}

/**
 * ConcreteFlyweight, реализует приспособленца
 */
class ConcreteFlyweight extends Flyweighter
{
    /**
     * @var int
     */
    protected $state;

    /**
     * @var string
     */
    protected $name;

    /**
     * Конструктор
     *
     * @param int $state - состояние приспособленца
     */
    public function __construct($state)
    {
        $this->state = $state;
    }

    /**
     * Получить имя приспособленца
     *
     * @return string
     */
    public function getName()
    {
        return "My name: " . $this->name;
    }

    /**
     * Задать имя приспособленца
     *
     * @param string $name - имя
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
