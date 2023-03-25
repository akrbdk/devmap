
## Спецификация (Specification)


## Назначение

Строит ясное описание бизнес-правил, на соответствие которым могут быть проверены объекты. Композитный класс спецификация имеет один метод, называемый isSatisfiedBy, который возвращает истину или ложь в зависимости от того, удовлетворяет ли данный объект спецификации.

## Код

### Item.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\Specification;


    class Item

    {

        public function __construct(private float $price)

        {

        }


        public function getPrice(): float

        {

            return $this->price;

        }

    }

### Specification.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\Specification;


    interface Specification

    {

        public function isSatisfiedBy(Item $item): bool;

    }

### OrSpecification.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\Specification;


    class OrSpecification implements Specification

    {

        /**

        * @var Specification[]

        */

        private array $specifications;


        /**

        * @param Specification[] $specifications

        */

        public function __construct(Specification ...$specifications)

        {

            $this->specifications = $specifications;

        }


        /*

        * if at least one specification is true, return true, else return false

        */

        public function isSatisfiedBy(Item $item): bool

        {

            foreach ($this->specifications as $specification) {

                if ($specification->isSatisfiedBy($item)) {

                    return true;

                }

            }


            return false;

        }

    }

### PriceSpecification.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\Specification;


    class PriceSpecification implements Specification

    {

        public function __construct(private ?float $minPrice, private ?float $maxPrice)

        {

        }


        public function isSatisfiedBy(Item $item): bool

        {

            if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice) {

                return false;

            }


            if ($this->minPrice !== null && $item->getPrice() < $this->minPrice) {

                return false;

            }


            return true;

        }

    }

### AndSpecification.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\Specification;


    class AndSpecification implements Specification

    {

        /**

        * @var Specification[]

        */

        private array $specifications;


        /**

        * @param Specification[] $specifications

        */

        public function __construct(Specification ...$specifications)

        {

            $this->specifications = $specifications;

        }


        /**

        * if at least one specification is false, return false, else return true.

        */

        public function isSatisfiedBy(Item $item): bool

        {

            foreach ($this->specifications as $specification) {

                if (!$specification->isSatisfiedBy($item)) {

                    return false;

                }

            }


            return true;

        }

    }

### NotSpecification.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\Specification;


    class NotSpecification implements Specification

    {

        public function __construct(private Specification $specification)

        {

        }


        public function isSatisfiedBy(Item $item): bool

        {

            return !$this->specification->isSatisfiedBy($item);

        }

    }

## Тест

### Tests/SpecificationTest.php

    <?php


    declare(strict_types=1);


    namespace DesignPatterns\Behavioral\Specification\Tests;


    use DesignPatterns\Behavioral\Specification\Item;

    use DesignPatterns\Behavioral\Specification\NotSpecification;

    use DesignPatterns\Behavioral\Specification\OrSpecification;

    use DesignPatterns\Behavioral\Specification\AndSpecification;

    use DesignPatterns\Behavioral\Specification\PriceSpecification;

    use PHPUnit\Framework\TestCase;


    class SpecificationTest extends TestCase

    {

        public function testCanOr()

        {

            $spec1 = new PriceSpecification(50, 99);

            $spec2 = new PriceSpecification(101, 200);


            $orSpec = new OrSpecification($spec1, $spec2);


            $this->assertFalse($orSpec->isSatisfiedBy(new Item(100)));

            $this->assertTrue($orSpec->isSatisfiedBy(new Item(51)));

            $this->assertTrue($orSpec->isSatisfiedBy(new Item(150)));

        }


        public function testCanAnd()

        {

            $spec1 = new PriceSpecification(50, 100);

            $spec2 = new PriceSpecification(80, 200);


            $andSpec = new AndSpecification($spec1, $spec2);


            $this->assertFalse($andSpec->isSatisfiedBy(new Item(150)));

            $this->assertFalse($andSpec->isSatisfiedBy(new Item(1)));

            $this->assertFalse($andSpec->isSatisfiedBy(new Item(51)));

            $this->assertTrue($andSpec->isSatisfiedBy(new Item(100)));

        }


        public function testCanNot()

        {

            $spec1 = new PriceSpecification(50, 100);

            $notSpec = new NotSpecification($spec1);


            $this->assertTrue($notSpec->isSatisfiedBy(new Item(150)));

            $this->assertFalse($notSpec->isSatisfiedBy(new Item(50)));

        }

    }