
## Локатор Служб (Service Locator)

Этот шаблон считается анти-паттерном!

Некоторые считают Локатор Служб анти-паттерном. Он нарушает принцип инверсии зависимостей (Dependency Inversion principle) из набора принципов SOLID. Локатор Служб скрывает зависимости данного класса вместо их совместного использования, как в случае шаблона Внедрение Зависимости (Dependency Injection). В случае изменения данных зависимостей мы рискуем сломать функционал классов, которые их используют, вследствие чего затрудняется поддержка системы.


## Назначение

Для реализации слабосвязанной архитектуры, чтобы получить хорошо тестируемый, сопровождаемый и расширяемый код. Паттерн Инъекция зависимостей (DI) и паттерн Локатор Служб — это реализация паттерна Инверсия управления (Inversion of Control, IoC).


## Использование

С Локатором Служб вы можете зарегистрировать сервис для определенного интерфейса. С помощью интерфейса вы можете получить зарегистрированный сервис и использовать его в классах приложения, не зная его реализацию. Вы можете настроить и внедрить объект Service Locator на начальном этапе сборки приложения.


## Код

### Service.php

    <?php


    namespace DesignPatterns\More\ServiceLocator;


    interface Service

    {


    }

### ServiceLocator.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\More\ServiceLocator;


    use OutOfRangeException;

    use InvalidArgumentException;


    class ServiceLocator

    {

        /**

        * @var string[][]

        */

        private array $services = [];


        /**

        * @var Service[]

        */

        private array $instantiated = [];


        public function addInstance(string $class, Service $service)

        {

            $this->instantiated[$class] = $service;

        }


        public function addClass(string $class, array $params)

        {

            $this->services[$class] = $params;

        }


        public function has(string $interface): bool

        {

            return isset($this->services[$interface]) || isset($this->instantiated[$interface]);

        }


        public function get(string $class): Service

        {

            if (isset($this->instantiated[$class])) {

                return $this->instantiated[$class];

            }


            $object = new $class(...$this->services[$class]);


            if (!$object instanceof Service) {

                throw new InvalidArgumentException('Could not register service: is no instance of Service');

            }


            $this->instantiated[$class] = $object;


            return $object;

        }

    }

### LogService.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\More\ServiceLocator;


    class LogService implements Service

    {


    }


## Тест

### Tests/ServiceLocatorTest.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\More\ServiceLocator\Tests;


    use DesignPatterns\More\ServiceLocator\LogService;

    use DesignPatterns\More\ServiceLocator\ServiceLocator;

    use PHPUnit\Framework\TestCase;


    class ServiceLocatorTest extends TestCase

    {

        private ServiceLocator $serviceLocator;


        public function setUp(): void

        {

            $this->serviceLocator = new ServiceLocator();

        }


        public function testHasServices()

        {

            $this->serviceLocator->addInstance(LogService::class, new LogService());


            $this->assertTrue($this->serviceLocator->has(LogService::class));

            $this->assertFalse($this->serviceLocator->has(self::class));

        }


        public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet()

        {

            $this->serviceLocator->addClass(LogService::class, []);

            $logger = $this->serviceLocator->get(LogService::class);


            $this->assertInstanceOf(LogService::class, $logger);

        }

    }

