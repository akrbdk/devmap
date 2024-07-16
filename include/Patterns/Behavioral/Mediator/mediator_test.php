<?php

namespace Pattern;

use PHPUnit_Framework_TestCase;

require 'mediator.php';

class MediatorTest extends PHPUnit_Framework_TestCase
{
    public function testMediator()
    {
        $mediator = new ConcreteMediator();

        $mediator->farmer = new Farmer($mediator);
        $mediator->cannery = new Cannery($mediator);
        $mediator->shop = new Shop($mediator);

        // Фермер выращивает 1000 помидор,
        // И сообщает посреднику о завершении своей работы.
        // Далее посредник отправляет помидоры на Завод.
        // После того как завод произведет 250 упаковок кетчупа,
        // он сообщает посреднику о поставке его в магазин.
        // В итоге магазин продает кетчуп на 20000 денег.
        $mediator->farmer->growTomato(1000);

        $this->assertEquals($mediator->shop->money, 20000);
    }
}