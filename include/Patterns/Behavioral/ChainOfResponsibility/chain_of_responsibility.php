<?php
/**
 * Паттерн Цепочка ответственности (Chain Of Responsibility)
 */

namespace Pattern;
 
/**
 * Базовый абстрактный класс Handler, описывает интерфейс обработчиков в цепочки
 */
abstract class Handler
{
    /**
     * @var Handler - преемник
     */
    protected $successor;

    /**
     * Обрабатывает или отправляет запрос дальше по цепочке
     *
     * @param Handler handler - обработчик
     *
     * @return Handler
     */
    public function addHandler(Handler $handler)
    {
        $this->successor = $handler;

        return $handler;
    }

    /**
     * Обрабатывает или отправляет запрос дальше по цепочке
     *
     * @param int message - сообщение для обработки
     *
     * @return string
     */
    public abstract function sendRequest($message);
}

/**
 * ConcreteHandlerA, реализует обработчик "A"
 */
class ConcreteHandlerA extends Handler
{
    /**
     * Обрабатывает или отправляет запрос дальше по цепочке
     *
     * @param int message - сообщение для обработки
     *
     * @return string
     */
    public function sendRequest($message) {

        $result = "";

        if ($message === 1) {
            $result = "Im handler 1";
        } else if ($this->successor != null) {
            $result = $this->successor->sendRequest($message);
        }

        return $result;
    }
}

/**
 * ConcreteHandlerB, реализует обработчик "B"
 */
class ConcreteHandlerB extends Handler
{
    /**
     * Обрабатывает или отправляет запрос дальше по цепочке
     *
     * @param int message - сообщение для обработки
     *
     * @return string
     */
    public function sendRequest($message) {

        $result = "";

        if ($message === 2) {
            $result = "Im handler 2";
        } else if ($this->successor != null) {
            $result = $this->successor->sendRequest($message);
        }

        return $result;
    }
}

/**
 * ConcreteHandlerC, реализует обработчик "C"
 */
class ConcreteHandlerC extends Handler
{
    /**
     * Обрабатывает или отправляет запрос дальше по цепочке
     *
     * @param int message - сообщение для обработки
     *
     * @return string
     */
    public function sendRequest($message) {

        $result = "";

        if ($message === 3) {
            $result = "Im handler 3";
        } else if ($this->successor != null) {
            $result = $this->successor->sendRequest($message);
        }

        return $result;
    }
}
