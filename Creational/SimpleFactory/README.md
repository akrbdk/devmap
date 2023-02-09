
## Простая Фабрика (SimpleFactory)

SimpleFactory в примере ниже, это паттерн «Простая Фабрика».

Она отличается от Статической Фабрики тем, что собственно не является статической. Таким образом, вы можете иметь множество фабрик с разными параметрами. Простая фабрика всегда должна быть предпочтительнее Статической фабрики!

![](uml18.png)

## Код

### SimpleFactory.php

    <?php
    
    
    declare(strict_types=1);
    
    
    namespace DesignPatterns\Creational\SimpleFactory;
    
    
    class SimpleFactory
    
    {
    
        public function createBicycle(): Bicycle
    
        {
    
            return new Bicycle();
    
        }
    
    }

### Bicycle.php

    <?php
    
    
    declare(strict_types=1);
    
    
    namespace DesignPatterns\Creational\SimpleFactory;
    
    
    class Bicycle
    
    {
    
        public function driveTo(string $destination)
    
        {
    
        }
    
    }

### Usage

    $factory = new SimpleFactory();
    
    $bicycle = $factory->createBicycle();
    
    $bicycle->driveTo('Paris');

### SimpleFactoryTest.php

    <?php
    
    
    declare(strict_types=1);
    
    
    namespace DesignPatterns\Creational\SimpleFactory\Tests;
    
    
    use DesignPatterns\Creational\SimpleFactory\Bicycle;
    
    use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
    
    use PHPUnit\Framework\TestCase;
    
    
    class SimpleFactoryTest extends TestCase
    
    {
    
        public function testCanCreateBicycle()
    
        {
    
            $bicycle = (new SimpleFactory())->createBicycle();
    
            $this->assertInstanceOf(Bicycle::class, $bicycle);
    
        }
    
    }




