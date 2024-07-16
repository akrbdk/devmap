<?php
/**
 * Паттерн Компоновщик (Composite)
 */

namespace Pattern;

/**
 * Базовый абстрактный класс Component, описывает интерфейс для ветвей и листьев дерева
 */
abstract class Component
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Конструктор
     *
     * @param string $name - имя файла или директории
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Добавляет элемент в ветвь дерева
     *
     * @param Component $child - дочерний элемент
     */
    public abstract function add(Component $child);

    /**
     * Возвращает имя компонента
     *
     * @return string
     */
    public abstract function name();

    /**
     * Возвращает дочерние элементы
     *
     * @return []Component
     */
    public abstract function childs();

    /**
     * Возвращает листинг дерева
     *
     * @param string $prefix - дочерний элемент
     *
     * @return string
     */
    public abstract function show($prefix);
}

/**
 * Directory, реализует ветви дерева
 */
class Directory extends Component
{
    /**
     * @var []Component
     */
    protected $childs = array();

    /**
     * Добавляет элемент в ветвь дерева
     *
     * @param Component $child - дочерний элемент
     */
    public function add(Component $child)
    {
        $this->childs[] = $child;
    }

    /**
     * Возвращает листинг дерева
     *
     * @param string $prefix - дочерний элемент
     *
     * @return string
     */
    public function show($prefix)
    {
        $result = $prefix . "/" . $this->name() . "\n";
        $childs = $this->childs();

        foreach ($childs as $child) {
            $result .= $child->show($prefix . "/" . $this->name());
        }

        return $result;
    }

    /**
     * Возвращает имя компонента
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Возвращает дочерние элементы
     *
     * @return []Component
     */
    public function childs()
    {
        return $this->childs;
    }
}

/**
 * File, реализует лист дерева
 */
class File extends Component
{
    /**
     * Добавляет элемент в ветвь дерева
     *
     * @param Component $child - дочерний элемент
     */
    public function add(Component $child)
    {
        throw new ErrorException();
    }

    /**
     * Возвращает дочерние элементы
     *
     * @return []Component
     */
    public function childs()
    {
        throw new ErrorException();
    }

    /**
     * Возвращает листинг дерева
     *
     * @param string $prefix - дочерний элемент
     *
     * @return string
     */
    public function show($prefix)
    {
        return $prefix . "/" . $this->name() . "\n";
    }

    /**
     * Возвращает имя компонента
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }
}
