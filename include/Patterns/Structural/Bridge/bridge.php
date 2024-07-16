<?php
/**
 * Паттерн Мост (Bridge)
 */

namespace Pattern;

/**
 * Абстрактный базовый класс Carer, описывает интерфейс автомобиля
 */
abstract class Carer
{
    /**
     * Aвтомобиль умеет ездить (для этого и нужен двигатель)
     *
     * @return string
     */
    public abstract function rase();
}

/**
 * Абстрактный базовый класс Enginer, описывает интерфейс двигателя
 * Каждый двигатель должен его реализовать
 */
abstract class Enginer
{
    /**
     * Возвращает звук двигателя
     *
     * @return string
     */
    public abstract function getSound();
}

/**
 * Car, реализует автомобиль
 */
class Car extends Carer
{
    /**
     * @var Enginer
     */
    protected $engine;

    /**
     * Конструктор
     *
     * @param Enginer $engine - двигатель
     */
    public function __construct(Enginer $engine)
    {
        $this->engine = $engine;
    }

    /**
     * Машина едет
     *
     * @return string
     */
    public function rase()
    {
        return $this->engine->getSound();
    }
}

/**
 * EngineSuzuki, реализует двигатель Suzuki
 */
class EngineSuzuki extends Enginer
{
    /**
     * Метод отвечает за завук двигателя
     *
     * @return string
     */
    public function getSound()
    {
        return "SssuuuuZzzuuuuKkiiiii";
    }
}

/**
 * EngineHonda, реализует двигатель Honda
 */
class EngineHonda extends Enginer
{
    /**
     * Метод отвечает за завук двигателя
     *
     * @return string
     */
    public function getSound()
    {
        return "HhoooNnnnnnnnnDddaaaaaaa";
    }
}

/**
 * EngineLada, реализует двигатель АвтоВаза
 */
class EngineLada extends Enginer
{
    /**
     * Метод отвечает за завук двигателя
     *
     * @return string
     */
    public function getSound()
    {
        return "PhhhhPhhhhPhPhPhPhPh";
    }
}
