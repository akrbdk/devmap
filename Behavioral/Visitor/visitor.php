<?php
/**
 * Паттерн Посетитель (Visitor)
 */

namespace Pattern;

/**
 * Базовый абстрактный класс Visitor, описывает интерфейс визитера
 */
abstract class Visitor
{
    /**
     * Визит в суши бар
     *
     * @param SushiBar $p
     *
     * @return string
     */
    public abstract function visitSushiBar(SushiBar $p);

    /**
     * Визит в пиццирию
     *
     * @param Pizzeria $p
     *
     * @return string
     */
    public abstract function visitPizzeria(Pizzeria $p);

    /**
     * Визит в бургерную
     *
     * @param BurgerBar $p
     *
     * @return string
     */
    public abstract function visitBurgerBar(BurgerBar $p);
}

/**
 * Базовый абстрактный класс Place, описывает интерфейс элементов, которые визитер должен обойти
 */
abstract class Place
{
    /**
     * Посещаем заведение
     * Грубо говоря это дверь в объект для визитера
     *
     * @param Visitor $v - визитер
     */
    public abstract function accept(Visitor $v);
}

/**
 * People, рeализует конкретного визитера
 */
class People extends Visitor
{
    /**
     * Визит в суши бар
     *
     * @param SushiBar $p
     *
     * @return string
     */
    public function visitSushiBar(SushiBar $p)
    {
        return $p->buySushi();
    }

    /**
     * Визит в пиццирию
     *
     * @param Pizzeria $p
     *
     * @return string
     */
    public function visitPizzeria(Pizzeria $p)
    {
        return $p->buyPizza();
    }

    /**
     * Визит в бургерную
     *
     * @param BurgerBar $p
     *
     * @return string
     */
    public function visitBurgerBar(BurgerBar $p)
    {
        return $p->buyBurger();
    }
}

/**
 * City, рeализует структуру (коллекцию), в которой хранятся элементы для обхода
 */
class City
{
    /**
     * @var []Place - места посещения
     */
    public $places = array();

    /**
     * Добавляет заведение в коллекцию
     *
     * @param Place $p - место посещения
     */
    public function add(Place $p)
    {
        $this->places[] = $p;
    }

    /**
     * Посещаем все заведения в городе
     *
     * @param Visitor $v - визитер
     *
     * @return string
     */
    public function accept(Visitor $v)
    {
        $result = array();
        foreach ($this->places as $p) {
            $result[] = $p->accept($v);
        }
        return join("", $result);
    }
}

/**
 * SushiBar, рeализует елемент суши бар
 */
class SushiBar extends Place
{
    /**
     * Посещаем заведение
     * Грубо говоря это дверь в объект для визитера
     *
     * @param Visitor $v - визитер
     */
    public function accept(Visitor $v)
    {
        return $v->visitSushiBar($this);
    }

    /**
     * Купить суши
     */
    public function buySushi()
    {
        return "Buy sushi...";
    }
}

/**
 * Pizzeria, рeализует елемент пицерия
 */
class Pizzeria extends Place
{
    /**
     * Посещаем заведение
     * Грубо говоря это дверь в объект для визитера
     *
     * @param Visitor $v - визитер
     */
    public function accept(Visitor $v)
    {
        return $v->visitPizzeria($this);
    }

    /**
     * Купить пиццу
     */
    public function buyPizza()
    {
        return "Buy pizza...";
    }
}

/**
 * BurgerBar, рeализует елемент бургерная
 */
class BurgerBar extends Place
{
    /**
     * Посещаем заведение
     * Грубо говоря это дверь в объект для визитера
     *
     * @param Visitor $v - визитер
     */
    public function accept(Visitor $v)
    {
        return $v->visitBurgerBar($this);
    }

    /**
     * Купить бургер
     */
    public function buyBurger()
    {
        return "Buy burger...";
    }

}
