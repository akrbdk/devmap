# ALGORITHMS

## Список ссылок

- [Сравнение алгоритмов сортировки](https://habr.com/ru/post/274017/)
- [Описание алгоритмов сортировки и сравнение их производительности](https://habr.com/ru/post/335920/)
- [Сортировка массивов](https://ru.hexlet.io/courses/php-arrays/lessons/sorting/theory_unit)
- [Bubble Sort Visualization](https://zenozeng.github.io/bubble-sort-visualization/)
- [Comparison Sorting Algorithms](https://www.cs.usfca.edu/~galles/visualization/ComparisonSort.html)

## Алгоритмы [&uarr;](#ALGORITHMS)

Мы смело оперируем фабриками, синглтонами и декораторами, но забываем о такой фундаментальной части программирования, как классические алгоритмы. Ведь если присмотреться к их реализации, то это тоже своего рода паттерны. С институтской скамьи можно вспомнить, к примеру, nested sets, b-tree, сортировку «пузырьком». Реализация многих алгоритмов давно устоялась.

## Рекурсия

В общем смысле `рекурсия` — это отображение чего-либо внутри самого себя. Рекурсивные алгоритмы используют рекурсивные функции, обладающие данным свойством.

Полезное практическое применение рекурсии — в сортировке и преобразовании массивов деревьев.

Существует два варианта реализации рекурсивных функций: простой и сложный:

- В `простом` случае рекурсивная функция вызывает саму себя.
- В `сложном` случае функция вызывает другую функцию, которая вызывает исходную функцию, с которой всё начиналось.

Рассмотрим пример из жизни. Если взять два больших зеркала и поставить их друг напротив друга, то можно увидеть бесконечный коридор из изображений зеркал. Каждое зеркало несёт в себе функцию отражения пространства расположенного перед ним. Поэтому здесь мы имеем пример сложной рекурсии (функция вызывает другую функцию, которая вызывает исходную).

### Глубина рекурсии

В связи с понятием рекурсии возникает понятие глубины рекурсии, то есть степени вложенности её отображений. Глубина рекурсии может быть равна бесконечности, в этом случае говорят о бесконечной рекурсии - в реальных условиях запуск программы приведёт к Segmentation fault, так как произойдёт переполнение стека вызова в силу ограничений на выделенную под него память. Понимая это, следует избегать таких конструкций при разработке. В PHP функции не могут вызывать друг друга бесконечно, так как это неизбежно приведёт к падению программы. Рекурсивный вызов должен завершиться по достижении степени вложенности n.

### Рекурсивные алгоритмы на PHP

- Нахождение факториала
- Вычисление последовательности Фибоначчи
- Поиск максимального элемента в массиве
- Вычисление перестановок Ханойских башен
- Рассчёт вариантов размена суммы монетами
- Рекурсивный обход дерева

## Сравнение алгоритмов сортировки [&uarr;](#ALGORITHMS)

`Сортировка массивов` — самая базовая алгоритмическая задача, которую нередко спрашивают на собеседованиях. В реальном коде массивы сортируют, используя уже готовые функции стандартной библиотеки. Тогда для чего задают подобные вопросы? Обычно собеседующий хочет узнать следующее:

- Насколько вы вообще в курсе о существовании алгоритмов.
- Способны ли вы программировать.
- Как работает ваше алгоритмическое мышление.

### Виды алгоритмов сортировки

- `Selection sort (сортировка выбором)` – суть алгоритма заключается в проходе по массиву от начала до конца в поиске минимального элемента массива и перемещении его в начало. Сложность такого алгоритма O(n^2).

- `Bubble sort (сортировка пузырьком)` – данный алгоритм меняет местами два соседних элемента, если первый элемент массива больше второго. Так происходит до тех пор, пока алгоритм не обменяет местами все неотсортированные элементы. Сложность данного алгоритма сортировки равна O(n^2).

- `Insertion sort (сортировка вставками)` – алгоритм сортирует массив по мере прохождения по его элементам. На каждой итерации берется элемент и сравнивается с каждым элементом в уже отсортированной части массива, таким образом находя «свое место», после чего элемент вставляется на свою позицию. Так происходит до тех пор, пока алгоритм не пройдет по всему массиву. На выходе получим отсортированный массив. Сложность данного алгоритма равна O(n^2).

- `Quick sort (быстрая сортировка)` – суть алгоритма заключается в разделении массива на два под-массива, средней линией считается элемент, который находится в самом центре массива. В ходе работы алгоритма элементы, меньшие чем средний, будут перемещены влево, а большие вправо. Такое же действие будет происходить рекурсивно и с под-массива, они будут разделяться на ещё два под-массива до тех пор, пока не останется один элемент. На выходе получим отсортированный массив. Сложность алгоритма зависит от входных данных и в лучшем случае будет равняться O(n*log₂n). В худшем случае O(n²). Существует также среднее значение, это O(n*log₂n).

- `Comb sort (сортировка расческой)` – идея работы алгоритма крайне похожа на сортировку обменом, но главным отличием является то, что сравниваются не два соседних элемента, а элементы на промежутке, к примеру, в пять элементов. Это обеспечивает избавление мелких значений в конце, что способствует ускорению сортировки в крупных массивах. Первая итерация совершается с шагом, рассчитанным по формуле (размер массива)/(фактор уменьшения), где фактор уменьшения равен приблизительно 1.247330950103979, или округлено до 1.3. Вторая и последующие итерации будут проходить с шагом (текущий шаг)/(фактор уменьшения) и будут происходить до тех пор, пока шаг не будет равен единице. Практически в любом случае сложность алгоритма равняется O(n*log₂n).

Для сортировки неотсортированного массива наиболее оптимальным из представленных алгоритмов является `быстрая сортировка`. Несмотря на более длительное время выполнения алгоритм потребляет меньше памяти, что может быть важным в крупных проектах.

Однако такие алгоритмы как `сортировка выбором`, `обменом` и `вставками` могут лучше подойти для научных целей, например, в обучении, где не нужно обрабатывать огромное количество данных.

При частично отсортированном массиве результаты не сильно отличаются, все алгоритмы сортировки показывают время примерно на 2-3 миллисекунды меньше. Однако при сортировке частично отсортированного массива `быстрая сортировка` срабатывает намного быстрее и потребляет меньшее количество памяти.

Эти примеры показывают основные методы сортировки в PHP, от простых, таких как пузырьковая сортировка, до более эффективных, таких как быстрая сортировка и сортировка слиянием.

### 1. Сортировка пузырьком (Bubble Sort)
```php
function bubbleSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Меняем местами элементы
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

$array = [64, 34, 25, 12, 22, 11, 90];
print_r(bubbleSort($array));
```

### 2. Сортировка выбором (Selection Sort)
```php
function selectionSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }
        // Меняем местами
        $temp = $array[$minIndex];
        $array[$minIndex] = $array[$i];
        $array[$i] = $temp;
    }
    return $array;
}

$array = [64, 25, 12, 22, 11];
print_r(selectionSort($array));
```

### 3. Сортировка вставками (Insertion Sort)
```php
function insertionSort($array) {
    $n = count($array);
    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key;
    }
    return $array;
}

$array = [12, 11, 13, 5, 6];
print_r(insertionSort($array));
```

### 4. Быстрая сортировка (Quick Sort)
```php
function quickSort($array) {
    if (count($array) < 2) {
        return $array;
    }
    $left = $right = [];
    $pivot = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

$array = [10, 7, 8, 9, 1, 5];
print_r(quickSort($array));
```

### 5. Сортировка слиянием (Merge Sort)
```php
function mergeSort($array) {
    if (count($array) <= 1) {
        return $array;
    }

    $middle = count($array) / 2;
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $i = $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    return array_merge($result, array_slice($left, $i), array_slice($right, $j));
}

$array = [12, 11, 13, 5, 6, 7];
print_r(mergeSort($array));
```

## Структуры данных [&uarr;](#ALGORITHMS)

Структуры данных — программная единица, позволяющая хранить и обрабатывать множество однотипных и/или логически связанных данных в вычислительной технике. Данные можно представить по-разному. В зависимости от того, что это за данные и что вы собираетесь с ними делать, одно представление подойдёт лучше других.

Рекомендуется ознакомиться с алгоритмами хотя бы на базовом уровне. Так как структуры данных реализованы с помощью алгоритмов, алгоритмы - с помощью структур данных.

### Основные структуры данных

- Списки
- Хеш-таблица
- Стек
- Очередь
- Граф
- Связный список
- Деревья
- Двоичное дерево поиска

В разделе PHP ранее были описаны некоторые структуры данных:

- [x] [SPL классы](readme-Learn-a-Language-PHP.md#SPL-классы-)
- [x] [Какие структуры данных вы знаете?](readme-Learn-a-Language-PHP.md#Какие-структуры-данных-вы-знаете?-)
- [x] [Разница стека и очереди](readme-Learn-a-Language-PHP.md#Разница-стэка-и-очереди.-)

## Некоторые вопросы по алгоритмам

### Структуры данных

1. Разница между Array (массивом) и LinkedList (связным списком).
2. Принцип работы массивов, списков, словарей и их использование для решения практических задач.
3. Какие компромиссы между объёмом занимаемой памяти и быстродействием имеют место в базовых структурах данных, какие операции и почему легче выполнять для массивов, а какие — для списков. Нужно привести и объяснить способы реализации хеш-таблиц и разрешений коллизий в них. Приоритетные очереди и способы их реализации.
4. Знать и понимать продвинутые структуры данных: B-деревья, биномиальные и фибоначчи-кучи, красно-чёрные деревья, «выворачивающиеся» (Splay) деревья, слоёные списки (skip lists), префиксные и суффиксные деревья и т.п.

### Алгоритмы

1. Найти среднее значение чисел в массиве.
2. Знать основные алгоритмы сортировки, поиска, обхода и выборки данных.
3. Деревья и графы. Простые «жадные» алгоритмы и алгоритмы вида «разделяй-и-властвуй» (вроде QuickSort). Необходимо понять смысл обозначения уровней в этой матрице.
4. Распознать и программно решить задачи динамического программирования, хорошо знать алгоритмы работы с графами, вычислительные алгоритмы. Распознать класс сложности задачи и т.п.
