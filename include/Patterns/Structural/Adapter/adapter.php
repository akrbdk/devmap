<?php
/**
 * Паттерн Адаптер (Adapter)
 */

namespace Pattern;

/**
 * Target, описывает интерфейс с которым наша система хотела бы работать
 */
interface ITarget
{
    /**
     * Адаптирующий метод
     */
    public function request();
}

/**
 * Adaptee, реализует ту систему, которую нужно адаптировать.
 */
class Adaptee
{
    /**
     * Специфический Request
     * Будем его адаптировать
     *
     * @return string
     */
    public function specificRequest()
    {
        return "Request";
    }
}

/**
 * Adapter, реализует адаптер
 */
class Adapter extends Adaptee implements ITarget
{
    /**
     * Адаптирующий метод
     *
     * @return string
     */
    public function request()
    {
        return $this->specificRequest();
    }
}
