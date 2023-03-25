<?php
/**
 * Паттерн Состояние (State)
 *
 * В примере описываются варианты оповещения пользователя мобильного телефона.
 * На самом деле, хорошо было бы реализовать смену состояния внутри системы
 * оповещения (ModileAlert), по каким-либо критериям. Например, задействуя файл конфигруции.
 * Но для упращения примера, используется внешняя смена состояния, посредствам метода SetState()
 */

namespace Pattern;

/**
 * ModileAlertStater, описывает общий интерфейс для различных состояний
 */
abstract class ModileAlertStater
{
    /**
     * Оповещение в зависимости от внутреннего состояния
     *
     * @return string
     */
    public abstract function alert();
}

/**
 * ModileAlert, реализует оповещение в зависимости от своего состояния
 */
class ModileAlert
{
    /**
     * @var ModileAlertStater
     */
    protected $state;

    /**
     * Установить посредника
     *
     * @param Mediator $mediator - посредник
     */
    public function __construct(ModileAlertStater $state)
    {
        $this->state = $state;
    }

    /**
     * Оповещение в зависимости от внутреннего состояния
     *
     * @return string
     */
    public function alert()
    {
        return $this->state->alert();
    }

    /**
     * Меняет состояние
     */
    public function setState(ModileAlertStater $state)
    {
        $this->state = $state;
    }
}

/**
 * MobileAlertVibration, реализует оповещение только вибрацией
 */
class MobileAlertVibration extends ModileAlertStater
{
    /**
     * Оповещение вибрацией
     *
     * @return string
     */
    public function alert()
    {
        return "Vrrr... Brrr... Vrrr...";
    }
}

/**
 * MobileAlertSong, реализует оповещение только звуковым сигналом
 */
class MobileAlertSong extends ModileAlertStater
{
    /**
     * Оповещение звуком
     *
     * @return string
     */
    public function alert()
    {
        return "Белые розы, Белые розы. Беззащитны шипы...";
    }
}
