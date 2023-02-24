
## Объект Null (Null Object)

## Назначение

NullObject не шаблон из книги Банды Четырёх, но схема, которая появляется достаточно часто, чтобы считаться паттерном. Она имеет следующие преимущества:

    Клиентский код упрощается

    Уменьшает шанс исключений из-за нулевых указателей (и ошибок PHP различного уровня)

    Меньше дополнительных условий — значит меньше тесткейсов

Методы, которые возвращают объект или Null, вместо этого должны вернуть объект NullObject. Это упрощённый формальный код, устраняющий необходимость проверки if (!is_null($obj)) { $obj->callSomething(); }, заменяя её на обычный вызов $obj->callSomething();.


## Примеры

    Null logger or null output to preserve a standard way of interaction between objects, even if the shouldn’t do anything

    null handler in a Chain of Responsibilities pattern

    null command in a Command pattern

## Код

### Service.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\NullObject;


    class Service

    {

        public function __construct(private Logger $logger)

        {

        }


        /**

        * do something ...

        */

        public function doSomething()

        {

            // notice here that you don't have to check if the logger is set with eg. is_null(), instead just use it

            $this->logger->log('We are in ' . __METHOD__);

        }

    }

### Logger.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\NullObject;


    /**

    * Key feature: NullLogger must inherit from this interface like any other loggers

    */

    interface Logger

    {

        public function log(string $str);

    }

### PrintLogger.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\NullObject;


    class PrintLogger implements Logger

    {

        public function log(string $str)

        {

            echo $str;

        }

    }

### NullLogger.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\NullObject;


    class NullLogger implements Logger

    {

        public function log(string $str)

        {

            // do nothing

        }

    }

## Тест

### Tests/LoggerTest.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\NullObject\Tests;


    use DesignPatterns\Behavioral\NullObject\NullLogger;

    use DesignPatterns\Behavioral\NullObject\PrintLogger;

    use DesignPatterns\Behavioral\NullObject\Service;

    use PHPUnit\Framework\TestCase;


    class LoggerTest extends TestCase

    {

        public function testNullObject()

        {

            $service = new Service(new NullLogger());

            $this->expectOutputString('');

            $service->doSomething();

        }


        public function testStandardLogger()

        {

            $service = new Service(new PrintLogger());

            $this->expectOutputString('We are in DesignPatterns\Behavioral\NullObject\Service::doSomething');

            $service->doSomething();

        }

    }
