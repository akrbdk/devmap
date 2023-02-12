
## Текучий Интерфейс (Fluent Interface)


## Назначение

Писать код, который легко читается, как предложения в естественном языке (вроде русского или английского).

## Примеры

    Doctrine2’s QueryBuilder работает примерно также, как пример ниже.

    PHPUnit использует текучий интерфейс, чтобы создавать макеты объектов.

## Код

### Sql.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\FluentInterface;


    class Sql implements \Stringable

    {

        private array $fields = [];

        private array $from = [];

        private array $where = [];


        public function select(array $fields): Sql

        {

            $this->fields = $fields;


            return $this;

        }


        public function from(string $table, string $alias): Sql

        {

            $this->from[] = $table . ' AS ' . $alias;


            return $this;

        }


        public function where(string $condition): Sql

        {

            $this->where[] = $condition;


            return $this;

        }


        public function __toString(): string

        {

            return sprintf(

                'SELECT %s FROM %s WHERE %s',

                join(', ', $this->fields),

                join(', ', $this->from),

                join(' AND ', $this->where)

            );

        }

    }

## Тест

### Tests/FluentInterfaceTest.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Structural\FluentInterface\Tests;


    use DesignPatterns\Structural\FluentInterface\Sql;

    use PHPUnit\Framework\TestCase;


    class FluentInterfaceTest extends TestCase

    {

        public function testBuildSQL()

        {

            $query = (new Sql())

                    ->select(['foo', 'bar'])

                    ->from('foobar', 'f')

                    ->where('f.bar = ?');


            $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);

        }

    }