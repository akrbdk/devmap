<?php
/**
 * Абстрактная фабрика (Abstract Factory)
 */

namespace Pattern;

/**
 * Базовый абстрактный класс AbstractFactory, описывает интерфейс Абстрактной Фабрики
 * по производству газировки.
 * Конкретные фабрики должны его реализовать.
 */
abstract class AbstractFactory
{
    /**
     * Создает воду
     *
     * @param int|float $value - объем
     *
     * @return CocaColaWater
     */
    public abstract function createWater($volume);

    /**
     * Создает бутылку
     *
     * @param int|float $value - объем
     *
     * @return CocaColaBottle
     */
    public abstract function createBottle($volume);
}

/**
 * Базовый абстрактный класс AbstractWater, описывает напиток.
 */
abstract class AbstractWater
{
    /**
     * Возможность получения объема
     *
     * @return int|float
     */
    public abstract function getVolume();
}

/**
 * Базовый абстрактный класс AbstractBottle, описывает бутылку.
 */
abstract class AbstractBottle
{
    /**
     * Бутылка взаидодействует с напитком
     *
     * @param AbstractWater $water - напиток
     */
    public abstract function interactWater(AbstractWater $water);

    /**
     * Возможность получения объема бутылки
     *
     * @return int|float
     */

    public abstract function getBottleVolume();

    /**
     * Возможность получения объема напитка в бутылке
     *
     * @return int|float
     */
    public abstract function getWaterVolume();
}

/**
 * Класс CocaColaFactory, реализует фабрику по производству CocaCola.
 */
class CocaColaFactory extends AbstractFactory
{
    /**
     * Создает воду
     *
     * @param int|float $value - объем
     *
     * @return CocaColaWater
     */
    public function createWater($volume)
    {
        return new CocaColaWater($volume);
    }

    /**
     * Создает бутылку
     *
     * @param int|float $value - объем
     *
     * @return CocaColaBottle
     */
    public function createBottle($volume)
    {
        return new CocaColaBottle($volume);
    }
}

/**
 * Напиток CocaCola
 */
class CocaColaWater extends AbstractWater
{
    /**
     * @var int|float - объем созданого напитка
     */
    protected $volume;

    /**
     * Конструктор
     *
     * @param int|float $volume - объем
     */
    public function __construct($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Получить объем созданого напитка
     *
     * @return int|float
     */
    public function getVolume()
    {
        return $this->volume;
    }
}

/**
 * Бутылка CocaCola
 */
class CocaColaBottle extends AbstractBottle
{
    /**
     * @var CocaColaWater - напиток
     */
    protected $water;

    /**
     * @var int|float - объем бутылки
     */
    protected $volume;

    /**
     * Конструктор
     *
     * @param int|float $volume - объем
     */
    public function __construct($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Наливаем напиток в бутылку
     *
     * @param CocaColaWater $water - напиток
     */
    public function interactWater(AbstractWater $water)
    {
        $this->water = $water;
    }

    /**
     * Получить объем бутылки
     *
     * @return int|float
     */
    public function getBottleVolume()
    {
        return $this->volume;
    }

    /**
     * Получить объем налитого напитка
     *
     * @return int|float
     */
    public function getWaterVolume()
    {
        if ($this->water instanceof AbstractWater) {
            return $this->water->GetVolume();
        }
        return 0;
    }
}
