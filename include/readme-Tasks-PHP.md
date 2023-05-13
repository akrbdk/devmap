# Readme

#### написать пример применения анонимных классов

```php
// Анонимные классы полезны, когда нужно создать простые, одноразовые объекты. 

// Использование явного класса
class Logger
{
    public function log($msg)
    {
        echo $msg;
    }
}

$util->setLogger(new Logger());

// Использование анонимного класса
$util->setLogger(new class {
    public function log($msg)
    {
        echo $msg;
    }
});
```

#### array_walk и замыкания

```php
    $fruits = [
        "d" => "lemon", 
        "a" => "orange", 
        "b" => "banana", 
        "c" => "apple"
        ];
    
    array_walk($fruits, function($item, $key) {
        echo $key . ' => ' . $item . "\n";
    });
```

#### yield, fibers, корутины

```php
function generate() {
    $fruits = [
		"d" => "lemon", 
		"a" => "orange", 
		"b" => "banana", 
		"c" => "apple"
	];

	foreach($fruits as $fruit){
		yield $fruit;
	}
}

$generator = generate();
foreach ($generator as $value) {
    echo "$value\n";
}
```

#### preg_replace

```php
$p = array('/a/', '/b/', '/c/');
$r = array('b', 'c', 'd');
print_r(preg_replace($p, $r, 'a'));
// prints d

$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1}1,$3';
echo preg_replace($pattern, $replacement, $string);
//prints April1,2003
```

#### Написать пример паттерна Singelton

```php

```

#### Написать функцию вычисления факториала (рекурсия / итерация)

```php
function factorial($n): float|int
{
    return $n < 2 ? 1 : $n * factorial($n - 1);
}

echo factorial(5); //120
```

#### Сортировка пузырьком, сложность алгоритма

```php
function bubbleSort($coll)
{
    $size = count($coll);
    do {
        $swapped = false;
        // Перебираем массив и меняем местами элементы, если предыдущий
        // больше, чем следующий
        for ($i = 0; $i < $size - 1; $i++) {
            if ($coll[$i] > $coll[$i + 1]) {
                $temp = $coll[$i];
                $coll[$i] = $coll[$i + 1];
                $coll[$i + 1] = $temp;
                $swapped = true;
            }
        }
        // Уменьшаем счетчик на 1, т.к. самый большой элемент уже находится
        // в конце массива
        $size--;
    } while ($swapped); // продолжаем, пока swapped === true

    return $coll;
}

print_r(bubbleSort([3, 2, 10, -2, 0]));
// => Array
// => (
// =>     [0] => -2
// =>     [1] => 0
// =>     [2] => 2
// =>     [3] => 3
// =>     [4] => 10
// => )
```

#### В чем отличие между результатами выполнения

```php
$aparts = $aparts + $filedata;             
$aparts = array_merge($aparts, $filedata);

//Если вы хотите дополнить первый массив элементами второго без перезаписи 
//элементов первого массива и без переиндексации, используйте оператор объединения массивов +
//Ключи из первого массива будут сохранены. Если ключ массива существует в обоих массивах, то будет использован 
//элемент из первого массива, а соответствующий элемент из второго массива будет проигнорирован.
```


#### Факториал

```php
function factorial($n): float|int
{
    return $n < 2 ? 1 : $n * factorial($n - 1);
}

echo factorial(6) . "\n";
```

#### Рекурсия

У нас есть набор типов упаковок с лимонадом и каждый тип упаковки вмещает в себя определенное количество бутылок.
Необходимо определить сколько нужно упаковок продать клиенту, который хочет купить определенное количество банок лимонада.
Если количество банок меньше чем вмещает самая маленькая упаковка - возвращаем одну упаковку так как поштучно банки не продаются.

```php


/*
решение с набором типов упаковок в виде констант
*/


const BIG = 20;
const MIDDLE = 6;
const SMALL = 2;

function packCount($bottles = 0, $count = 0): int
{
	switch($bottles){
		case $bottles >= BIG:
			$count += intdiv($bottles, BIG);
			if($bottles % BIG > 0){
				$count += packCount($bottles % BIG);
			}
			break;
		case $bottles >= MIDDLE:
			$count += intdiv($bottles, MIDDLE);
			if($bottles % MIDDLE > 0){
				$count += packCount($bottles % MIDDLE);
			}
			break;
		case $bottles >= SMALL:
			$count += intdiv($bottles, SMALL);
			if($bottles % SMALL > 0){
				$count += packCount($bottles % SMALL);
			}
			break;
		case $bottles < SMALL && $bottles > 0:
			return 1;
			break;
		default:
			return 0;
	}
	return $count;
}

echo packCount(55) . " \n\n";

/*
решение с набором типов упаковок в виде динамичного параметра
*/

function packCount2(int $bottles, array $packs): int
{
	
	$count = 0;
	
	arsort($packs);
	
	foreach($packs as $key=>$pack){
		if($bottles >= $pack){
			$count += intdiv($bottles, $pack);
			
			if($bottles % $pack > 0){
				$count += packCount2($bottles % $pack, array_splice($packs, $key));
			}
			return $count;
		}
	}
	
	if($bottles > 0){
		return 1;
	}
	
	return $count;
}

echo packCount2(55, [20, 2, 6]) . " \n\n\n";
```