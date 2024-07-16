<?php
/**
 * Паттерн Заместитель (Proxy)
 */

namespace Pattern;

/**
 * Интерфейс Subject, описывает интерфейс для реального объекта и его суррогата
 */
interface ISubject
{
    /**
     * Субьект говорит
     *
     * @return string
     */
    public function send();
}

/**
 * Proxy, реализует объект суррогата
 */
class Proxy implements ISubject
{
    /**
     * @var Subject
     */
    protected $realSubject;

    /**
     * Сурогат говорит
     *
     * @return string
     */
    public function send()
    {
        // Подключать реальный объект можно и в контролере.
        // Или агригировать его на этапе создания суррогата.
        // Все зависит от конечных целей.
        if ($this->realSubject == null) {
            $this->realSubject = new RealSubject();
        }

        return "<strong>" . $this->realSubject->send() . "</strong>";
    }
}

/**
 * RealSubject, реализует реальный объект
 */
class RealSubject implements ISubject
{
    /**
     * Реальный объект говорит
     *
     * @return string
     */
    public function send()
    {
        return "I’ll be back!";
    }
}
