
## Внедрение Зависимости (Dependency Injection)

## Назначение

Для реализации слабосвязанной архитектуры. Чтобы получить более тестируемый, сопровождаемый и расширяемый код.

## Использование

Объект DatabaseConfiguration внедряется в DatabaseConnection и последний получает всё, что ему необходимо из переменной $ config. Без DI, конфигурация будет создана непосредственно в Connection, что не очень хорошо для тестирования и расширения Connection, так как связывает эти классы напрямую.

## Примеры

The Doctrine2 ORM использует Внедрение Зависимости например для конфигурации, которая внедряется в объект Connection. Для целей тестирования, можно легко создать макет объекта конфигурации и внедрить его в объект Connection, подменив оригинальный.

Во многих фреймворках уже имеются контейнеры для DI, которые создают объекты через массив с конфигурацией и внедряют туда, где это нужно (например в Контроллеры).

## Код

### DatabaseConfiguration.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\DependencyInjection;


    class DatabaseConfiguration

    {

        public function __construct(

            private string $host,

            private int $port,

            private string $username,

            private string $password

        ) {

        }


        public function getHost(): string

        {

            return $this->host;

        }


        public function getPort(): int

        {

            return $this->port;

        }


        public function getUsername(): string

        {

            return $this->username;

        }


        public function getPassword(): string

        {

            return $this->password;

        }

    }

### DatabaseConnection.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\DependencyInjection;


    class DatabaseConnection

    {

        public function __construct(private DatabaseConfiguration $configuration)

        {

        }


        public function getDsn(): string

        {

            // this is just for the sake of demonstration, not a real DSN

            // notice that only the injected config is used here, so there is

            // a real separation of concerns here


            return sprintf(

                '%s:%s@%s:%d',

                $this->configuration->getUsername(),

                $this->configuration->getPassword(),

                $this->configuration->getHost(),

                $this->configuration->getPort()

            );

        }

    }


## Тест

### Tests/DependencyInjectionTest.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\DependencyInjection\Tests;


    use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;

    use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;

    use PHPUnit\Framework\TestCase;


    class DependencyInjectionTest extends TestCase

    {

        public function testDependencyInjection()

        {

            $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');

            $connection = new DatabaseConnection($config);


            $this->assertSame('domnikl:1234@localhost:3306', $connection->getDsn());

        }

    }