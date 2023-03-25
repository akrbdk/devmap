<?php
/**
 * Паттерн Команда (Command)
 */

namespace Pattern;
 
/**
 * Базовый абстрактный класс Command, описывает общий интерфейс для команд
 */
abstract class Command
{
    /**
     * @var Receiver
     */
    protected $receiver;

    /**
     * Конструктор
     *
     * @param Receiver $receiver - получатель команд
     */
    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * Выполнение команды получателем
     *
     * @return string
     */
    public abstract function execute();
}

/**
 * ToggleOnCommand, реализует команду включения тумблера
 */
class ToggleOnCommand extends Command
{
    /**
     * Выполнение команды получателем
     *
     * @return string
     */
    public function execute()
    {
        return $this->receiver->toggleOn();
    }
}

/**
 * ToggleOffCommand, реализует команду выключения тумблера
 */
class ToggleOffCommand extends Command
{
    /**
     * Выполнение команды получателем
     *
     * @return string
     */
    public function execute()
    {
        return $this->receiver->toggleOff();
    }
}

/**
 * Receiver, реализует получателя команд
 * Реализует набор действие которые получатель должен
 * выполнять, взависимости от полученой команды
 */
class Receiver
{
    /**
     * Действие на команду "поднять тумблер (ToggleOnCommand)"
     *
     * @return string
     */
    public function toggleOn()
    {
        return "Toggle On";
    }

    /**
     * Действие на команду "опустить тумблер (ToggleOffCommand)"
     *
     * @return string
     */
    public function toggleOff()
    {
        return "Toggle Off";
    }
}

/**
 * Invoker, реализует инициатора команды
 */
class Invoker
{
    /**
     * @var []Command
     */
    protected $commands = array();

    /**
     * Добавляет команду в очередь
     */
    public function storeCommand(Command $command)
    {
        array_push($this->commands, $command);
    }

    /**
     * Удаляет команду из очереди
     */
    public function UnStoreCommand()
    {
        array_pop($this->commands);
    }

    /**
     * Выполняет команды
     *
     * @return string
     */
    public function Execute()
    {
        $result = array();
        foreach ($this->commands as $command) {
            $result[] = $command->execute();
        }
        return join("", $result);
    }
}
