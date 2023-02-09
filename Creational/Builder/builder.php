<?php
/**
 * Паттерн Строитель (Builder)
 */

namespace Pattern;
 
/**
 * Абстрактный базовый класс Вuilder, описывает интерфейс строителя.
 * Строитель должен ему соответвовать, что бы строить
 * конкретный продукт.
 */
abstract class Вuilder
{
    /**
     * Строит шапку документа
     *
     * @param string $str - текст
     */
    public abstract function makeHeader($str);

    /**
     * Строит основной контент документа
     *
     * @param string $str - текст
     */
    public abstract function makeContent($str);

    /**
     * Строит подвал документа
     *
     * @param string $str - текст
     */
    public abstract function makeFooter($str);
}

/**
 * Класс Director, реализует руководителя строителем.
 * Примимает строителя и руководит им!
 */
class Director
{
    /**
     * @var Вuilder
     */
    protected $builder;

    /**
     * Конструктор
     *
     * @param Вuilder $builder - работник
     */
    public function __construct(Вuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Конструктор, говорит строителю, что ему делать
     * в нужной последовательности.
     */
    public function construct()
    {
        $this->builder->makeHeader("Header");
        $this->builder->makeContent("Content");
        $this->builder->makeFooter("Footer");
    }
}

/**
 * Конкретный строитель.
 * Умеет строить части продукта.
 */
class ConcreteBuilder extends Вuilder
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * Конструктор
     *
     * @param Product $product - продукт
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Строит шапку документа
     *
     * @param string $str - текст
     */
    public function makeHeader($str)
    {
        $this->product->header = "<header>" . $str . "</header>\n";
    }

    /**
     * Строит содержание документа
     *
     * @param string $str - текст
     */
    public function makeContent($str)
    {
        $this->product->content = "<article>" . $str . "</article>\n";
    }

    /**
     * Строит подвал документа
     *
     * @param string $str - текст
     */
    public function makeFooter($str)
    {
        $this->product->footer = "<footer>" . $str . "</footer>\n";
    }
}

/**
 * Сложный продукт.
 * Бывают реализации без него, когда строитель стразу строит,
 * а не создает объект продукта и потом конструирует его.
 */
class Product
{
    public $header;
    public $content;
    public $footer;

    /**
     * Показать продукт
     *
     * @return string
     */
    public function show()
    {
        $result  = $this->header;
        $result += $this->content;
        $result += $this->footer;
        return $result;
    }
}
