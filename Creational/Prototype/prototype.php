<?php
/**
 * Паттерн Прототип (Prototype)
 */

namespace Pattern;
 
/**
 * Абстрактный Prototype, описывает базовый интерфейс,
 * который должен реализовать каждый конкретный продукт.
 */
abstract class Prototyper
{
    /**
     * Метод клонирования
     *
     * @return Prototyper
     */
    public abstract function getClone();
}

/**
 * Конкретный продукт "A"
 */
class ConcreteProductA extends Prototyper
{
    /**
     * @var string - имя продукта
     */
    protected $name;

    /**
     * Конструктор
     *
     * @param string $name - имя подукта
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Возвращает имя продукты
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Метод клонирования.
     * Каждый объект должен реализовать сам,
     * как он будет себя клонировать.
     *
     * @return Prototyper
     */
    public function getClone()
    {
        return new ConcreteProductA($this->name);
    }
}

// ==================================
// Или используя ключевое слово clone
// ==================================

class ConcreteProductB
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __clone()
    {
        // тут можем контролировать клонирование
    }
}

// $product = new ConcreteProductC('C');
// $cloneProduct = clone $product;
