<?php
/**
 * Паттерн Фабричный метод (FactoryMethod)
 */

namespace Pattern;

/**
 * Абстрактный базовый класс Creater, описывает интерфейс,
 * который должна реализовать конкретная фабрика
 * для производства продуктов.
 */
abstract class Creater
{
    /**
     * Параметризированный Фабричный Метод
     *
     * @param string $action
     *
     * @return Producter
     */
    public abstract function createProduct($action);

    /**
     * Регистрация созданого подукта (для полноты картины)
     *
     * @param Producter $product
     */
    public abstract function registerProduct(Producter $product);
}

/**
 * Абстрактный базовый класс Producter, описывающий интерфейс продукта,
 * который возвращает фабрика.
 * Все продукты возвращаемые фабрикой должны придерживаться
 * единого интерфейса.
 */
abstract class Producter
{
    /**
     * Каждый продукт должно быть можно использовать
     *
     * @return string
     */
    public abstract function useProduct();
}

/**
 * Конкретная фабрика по производству продуктов.
 * Она имеет фабричный метод и производит продукты.
 */
class ConcreteCreator extends Creater
{
    /**
     * Произведенные продукты
     *
     * @var []Producter
     */
    protected $products = array();

    /**
     * Параметризированный Фабричный Метод
     *
     * @param string $action
     *
     * @return Producter
     */
    public function createProduct($action)
    {
        switch ($action) {
            case "A":
                $product = new ConcreteProductA($action);
                break;
            case "B":
                $product = new ConcreteProductB($action);
                break;
            case "C":
                $product = new ConcreteProductC($action);
                break;
            default:
                throw new ErrorException("Unknown Action");
        }

        $this->registerProduct($product);

        return $product;
    }

    /**
     * Регистрация созданого подукта на фабрике
     *
     * @param Producter $product
     */
    public function registerProduct(Producter $product)
    {
        $this->products[] = $product;
    }
}


/**
 * Конкретный продукт "A", который создает фабрика
 */
class ConcreteProductA extends Producter
{
    /**
     * @var string - действие которое делает продукт
     */
    protected $action;

    /**
     * Конструктор
     *
     * @param string $action - действие
     */
    public function __construct($action)
    {
        $this->action = $action;
    }

    /**
     * Продукт можно использовать и получить действие которое он делает
     *
     * @return string
     */
    public function useProduct()
    {
        return $this->action;
    }
}

/**
 * Конкретный продукт "B", который создает фабрика
 */
class ConcreteProductB extends Producter
{
    /**
     * @var string - действие которое делает продукт
     */
    protected $action;

    /**
     * Конструктор
     *
     * @param string $action - действие
     */
    public function __construct($action)
    {
        $this->action = $action;
    }

    /**
     * Продукт можно использовать и получить действие которое он делает
     *
     * @return string
     */
    public function useProduct()
    {
        return $this->action;
    }
}

/**
 * Конкретный продукт "C", который создает фабрика
 */
class ConcreteProductC extends Producter
{
    /**
     * @var string - действие которое делает продукт
     */
    protected $action;

    /**
     * Конструктор
     *
     * @param string $action - действие
     */
    public function __construct($action)
    {
        $this->action = $action;
    }

    /**
     * Продукт можно использовать и получить действие которое он делает
     *
     * @return string
     */
    public function useProduct()
    {
        return $this->action;
    }
}


