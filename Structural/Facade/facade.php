<?php
/**
 * Паттерн Фасад (Facade)
 */

namespace Pattern;
 
/**
 * Man, реализует мужика и фасад
 * В мужике заложено:
 */
class Man
{
    /**
     * @var House
     */
    public $house;

    /**
     * @var Tree
     */
    public $tree;

    /**
     * @var Child
     */
    public $child;

    /**
     * Конструктор. Создает мужика
     */
    public function __construct()
    {
        $this->house = new House();
        $this->tree = new Tree();
        $this->child = new Child();
    }

    /**
     * Мужик должен сделать
     *
     * @return string
     */
    public function todo()
    {
        $result = [
            $this->house->Build(),
            $this->tree->Grow(),
            $this->child->Born(),
        ];

        return join("\n", $result);
    }
}

/**
 * House, реализует подсистему "Дом"
 */
class House
{
    /**
     * Строительство дома
     */
    public function build()
    {
        return "Build house";
    }
}

/**
 * Tree, реализует подсистему "Дерево"
 */
class Tree
{
    /**
     * Посадка дерева
     *
     * @return string
     */
    public function grow()
    {
        return "Tree grow";
    }
}

/**
 * Child, реализует подсистему "Ребёнок"
 */
class Child
{
    /**
     * Производство детей =)
     *
     * @return string
     */
    public function born()
    {
        return "Child born";
    }
}

