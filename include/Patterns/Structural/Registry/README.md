
## Реестр (Registry)

## Назначение

Для реализации централизованного хранения объектов, часто используемых во всем приложении, как правило, реализуется с помощью абстрактного класса только c статическими методами (или с помощью шаблона Singleton). Помните, что это вводит глобальное состояние, которого следует избегать. Используйте Dependency Injection вместо Registry.

## Код

### Registry.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\Registry;


    use InvalidArgumentException;


    abstract class Registry

    {

        public const LOGGER = 'logger';


        /**

        * this introduces global state in your application which can not be mocked up for testing

        * and is therefor considered an anti-pattern! Use dependency injection instead!

        *

        * @var Service[]

        */

        private static array $services = [];


        private static array $allowedKeys = [

            self::LOGGER,

        ];


        final public static function set(string $key, Service $value)

        {

            if (!in_array($key, self::$allowedKeys)) {

                throw new InvalidArgumentException('Invalid key given');

            }


            self::$services[$key] = $value;

        }


        final public static function get(string $key): Service

        {

            if (!in_array($key, self::$allowedKeys) || !isset(self::$services[$key])) {

                throw new InvalidArgumentException('Invalid key given');

            }


            return self::$services[$key];

        }

    }

### Service.php

    <?php


    namespace DesignPatterns\Structural\Registry;


    class Service

    {


    }

## Тест

### Tests/RegistryTest.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\Registry\Tests;


    use InvalidArgumentException;

    use DesignPatterns\Structural\Registry\Registry;

    use DesignPatterns\Structural\Registry\Service;

    use PHPUnit\Framework\TestCase;


    class RegistryTest extends TestCase

    {

        private Service $service;


        protected function setUp(): void

        {

            $this->service = $this->getMockBuilder(Service::class)->getMock();

        }


        public function testSetAndGetLogger()

        {

            Registry::set(Registry::LOGGER, $this->service);


            $this->assertSame($this->service, Registry::get(Registry::LOGGER));

        }


        public function testThrowsExceptionWhenTryingToSetInvalidKey()

        {

            $this->expectException(InvalidArgumentException::class);


            Registry::set('foobar', $this->service);

        }


        /**

        * notice @runInSeparateProcess here: without it, a previous test might have set it already and

        * testing would not be possible. That's why you should implement Dependency Injection where an

        * injected class may easily be replaced by a mockup

        *

        * @runInSeparateProcess

        */

        public function testThrowsExceptionWhenTryingToGetNotSetKey()

        {

            $this->expectException(InvalidArgumentException::class);


            Registry::get(Registry::LOGGER);

        }

    }

