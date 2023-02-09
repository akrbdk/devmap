<?php
/**
 * Паттерн Наблюдатель (Observer)
 * Описана модель проталкивания
 */

namespace Pattern;

/**
 * Базовый абстрактный класс Subject, описывает интерфейс издателя
 */
abstract class Subject
{
    /**
     * Добавляет подписчика
     *
     * @param Observer $observer - подписчик
     */
    public abstract function attach(Observer $observer);

    /**
     * Отправляет уведомления методом проталкивания
     */
    public abstract function notify();
}

/**
 * Базовый абстрактный класс Observer, описывает интерфейс подписчиков
 */
abstract class Observer
{
    /**
     * Обновляет состояние подписчика
     *
     * @param string $state - состояние
     */
    public abstract function update($state);
}

/**
 * ConcreteSubject, реализует издателя
 */
class ConcreteSubject extends Subject
{
    /**
     * @var []Observer
     */
    protected $observers;

    /**
     * @var string
     */
    public $state;

    /**
     * Добавляет подписчика
     *
     * @param Observer $observer - подписчик
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * Отправляет уведомления методом проталкивания
     */
    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this->state);
        }
    }
}

/**
 * ConcreteObserver, реализует подписчика
 */
class ConcreteObserver extends Observer
{
    /**
     * @var string
     */
    public $state;

    /**
     * Обновляет состояние подписчика
     *
     * @param string $state - состояние
     */
    public function update($state)
    {
        $this->state = $state;
    }
}
