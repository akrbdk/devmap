## Преобразователь Данных (Data Mapper)

## Назначение

Преобразователь Данных — это паттерн, который выступает в роли посредника для двунаправленной передачи данных между
постоянным хранилищем данных (часто, реляционной базы данных) и представления данных в памяти (слой домена, то что уже
загружено и используется для логической обработки). Цель паттерна в том, чтобы держать представление данных в памяти и
постоянное хранилище данных независимыми друг от друга и от самого преобразователя данных. Слой состоит из одного или
более mapper-а (или объектов доступа к данным), отвечающих за передачу данных. Реализации mapper-ов различаются по
назначению. Общие mapper-ы могут обрабатывать всевозоможные типы сущностей доменов, а выделенные mapper-ы будет
обрабатывать один или несколько конкретных типов.

Ключевым моментом этого паттерна, в отличие от Активной Записи (Active Records) является то, что модель данных следует
Принципу Единой Обязанности SOLID.

## Примеры

    DB Object Relational Mapper (ORM) : Doctrine2 использует DAO под названием «EntityRepository»

## Код

### User.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\DataMapper;


    class User

    {

        public static function fromState(array $state): User

        {

            // validate state before accessing keys!


            return new self(

                $state['username'],

                $state['email']

            );

        }


        public function __construct(private string $username, private string $email)

        {

        }


        public function getUsername(): string

        {

            return $this->username;

        }


        public function getEmail(): string

        {

            return $this->email;

        }

    }

### UserMapper.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\DataMapper;


    use InvalidArgumentException;


    class UserMapper

    {

        public function __construct(private StorageAdapter $adapter)

        {

        }


        /**

        * finds a user from storage based on ID and returns a User object located

        * in memory. Normally this kind of logic will be implemented using the Repository pattern.

        * However the important part is in mapRowToUser() below, that will create a business object from the

        * data fetched from storage

        */

        public function findById(int $id): User

        {

            $result = $this->adapter->find($id);


            if ($result === null) {

                throw new InvalidArgumentException("User #$id not found");

            }


            return $this->mapRowToUser($result);

        }


        private function mapRowToUser(array $row): User

        {

            return User::fromState($row);

        }

    }

### StorageAdapter.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\DataMapper;


    class StorageAdapter

    {

        public function __construct(private array $data)

        {

        }


        /**

        * @return array|null

        */

        public function find(int $id)

        {

            if (isset($this->data[$id])) {

                return $this->data[$id];

            }


            return null;

        }

    }

## Тест

### Tests/DataMapperTest.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\DataMapper\Tests;


    use InvalidArgumentException;

    use DesignPatterns\Structural\DataMapper\StorageAdapter;

    use DesignPatterns\Structural\DataMapper\User;

    use DesignPatterns\Structural\DataMapper\UserMapper;

    use PHPUnit\Framework\TestCase;


    class DataMapperTest extends TestCase

    {

        public function testCanMapUserFromStorage()

        {

            $storage = new StorageAdapter([1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com']]);

            $mapper = new UserMapper($storage);


            $user = $mapper->findById(1);


            $this->assertInstanceOf(User::class, $user);

        }


        public function testWillNotMapInvalidData()

        {

            $this->expectException(InvalidArgumentException::class);


            $storage = new StorageAdapter([]);

            $mapper = new UserMapper($storage);


            $mapper->findById(1);

        }

    }



