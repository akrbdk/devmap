<?php
/**
 * Паттерн Одиночка (Singleton)
 */

namespace Pattern;
 
/*
 * Класс Singleton
 */
class Singleton
{
    /**
     * @var Singleton
     */
    public static $instance;

    /**
     * Получить экзепляр класса
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Блокируем создание экземпляра напрямую
     */
    private function __construct() {}

    /**
     * Блокируем клонирование созданого экземпляра
     */
    private function __clone() {}
}
