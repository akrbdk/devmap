<?php
/**
 * Паттерн Декоратор (Decorator)
 */

namespace Pattern;

/**
 * Component, описывает интерфейс для декоратора и компонента
 */
abstract class Component
{
    public abstract function Operation();
}

/**
 * ConcreteComponent, реализует компонент
 */
class ConcreteComponent extends Component
{
    /**
     * Операция, которую делает компонент сам по себе
     *
     * @return string
     */
    public function operation()
    {
        return "I am component!";
    }
}

/**
 * ConcreteDecorator, реализует декоратор
 */
class ConcreteDecorator extends Component
{
    /**
     * @var Component
     */
    protected $component;

    /**
     * Конструктор
     *
     * @param Component $component - компонет
     */
    public function __construct($component)
    {
        $this->component = $component;
    }

    /**
     * Декоратор оборачивает операцию компонента в тег <strong>
     *
     * @return string
     */
    public function operation()
    {
        return "<strong>" . $this->component->operation() . "</strong>";
    }
}
