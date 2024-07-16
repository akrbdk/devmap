<?php
/**
 * Паттерн Шаблонный метод (Template Method)
 */

namespace Pattern;

/**
 * Базовый абстратный класс QuotesInterface, описывает интерфейс установки разных кавычек
 */
abstract class AbstractQuotes
{
    /**
     * Template Method
     *
     * @param string $str - строка
     *
     * @return string
     */
    public function quotes($str)
    {
        return $this->open() . $str . $this->close();
    }

    /**
     * Открывающая кавычка
     *
     * @return string
     */
    public abstract function open();

    /**
     * Закрывающая кавычка
     *
     * @return string
     */
    public abstract function close();
}

/**
 * FrenchQuotes, рeализует обрамление строки Французскими кавычками (Ёлочками)
 */
class FrenchQuotes extends AbstractQuotes
{
    /**
     * Открывающая кавычка
     *
     * @return string
     */
    public function open()
    {
        return "«";
    }

    /**
     * Закрывающая кавычка
     *
     * @return string
     */
    public function close()
    {
        return "»";
    }
}


/**
 * GermanQuotes, рeализует обрамление строки Немецкими кавычками (Лапками)
 */
class GermanQuotes extends AbstractQuotes
{
    /**
     * Открывающая кавычка
     *
     * @return string
     */
    public function open()
    {
        return "„";
    }

    /**
     * Закрывающая кавычка
     *
     * @return string
     */
    public function close()
    {
        return "“";
    }
}
