<?php
/**
 * Паттерн Посредник (Mediator)
 */

namespace Pattern;

/**
 * Базовый абстрактный класс Mediator, описывает интерфейс для просредника
 */
abstract class Mediator
{
    /**
     * Общение с коллегами
     *
     * @param string $msg - сообщение
     */
    public abstract function send($msg);
}

/**
 * Базовый абстрактный класс Colleague, описывает интерфейс процесса взаимодействия
 * объектов-коллег с объектом типа Mediator;
 */
abstract class Colleague
{
    /**
     * @var Mediator
     */
    protected $mediator;

    /**
     * Установить посредника
     *
     * @param Mediator $mediator - посредник
     */
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}

/**
 * ConcreteMediator, реализует посредника
 */
class ConcreteMediator extends Mediator
{
    /**
     * @var Farmer
     */
    public $farmer;

    /**
     * @var Cannery
     */
    public $cannery;

    /**
     * @var Shop
     */
    public $shop;

    /**
     * Общение с коллегами
     *
     * @param string $msg - сообщение
     */
    public function send($msg)
    {
        if ($msg == "Farmer: Tomato complete...") {
            $this->cannery->money -= 10000;
            $this->farmer->money += 10000;
            $this->cannery->makeKetchup($this->farmer->getTomato());
        } else if ($msg == "Cannery: Ketchup complete...") {
            $this->shop->money -= 15000;
            $this->cannery->money += 15000;
            $this->shop->sellKetchup($this->cannery->getKetchup());
        }
    }
}

/**
 * Farmer, реализует коллегу Фермер
 */
class Farmer extends Colleague
{
    /**
     * @var int
     */
    public $tomato;

    /**
     * @var int|float
     */
    public $money = 5000;

    /**
     * Фермер выращивает помидоры
     *
     * @param int $tomato
     */
    public function growTomato($tomato) {
        $this->tomato = $tomato;
        $this->money -= 5000;
        $this->mediator->send("Farmer: Tomato complete...");
    }

    /**
     * Отдать помидоры
     *
     * @return int
     */
    public function getTomato()
    {
        $tomato = $this->tomato;
        $this->tomato = 0;
        return $tomato;
    }
}


/**
 * Cannery, реализует коллегу Завод
 */
class Cannery extends Colleague
{
    /**
     * @var int
     */
    public $ketchup;

    /**
     * @var int|float
     */
    public $money = 10000;

    /**
     * Завод перерабатывает помидоры в кетчуп
     * 4 помидорки на упаковку кетчупа
     *
     * @param int $tomato
     */
    public function makeKetchup($tomato)
    {
        $this->ketchup = $tomato / 4;
        $this->mediator->send("Cannery: Ketchup complete...");
    }

    /**
     * Отдать кетчуп
     *
     * @return int
     */
    public function getKetchup()
    {
        $ketchup = $this->ketchup;
        $this->ketchup = 0;
        return $ketchup;
    }
}

/**
 * Shop, реализует коллегу Магазин
 */
class Shop extends Colleague
{
    /**
     * @var int|float
     */
    public $money = 15000;

    /**
     * Магазин продает кетчуп по 80 рублей
     *
     * @param int $ketchup
     */
    public function sellKetchup($ketchup)
    {
        $this->money = $ketchup * 80;
    }
}
