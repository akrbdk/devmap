<?php
/**
 * Паттерн Стратегия (Strategy)
 */

namespace Pattern;

/**
 * StrategySort, описывает интерфейс стратегий (алгоритмов)
 */
abstract class StrategySort
{
    /**
     * @param []int $a
     */
    public abstract function sort(&$a);
}

/**
 * BubbleSort, рeализует алгоритм сортировки пузырьком
 */
class BubbleSort extends StrategySort
{
    public function sort(&$a)
    {
        $size = count($a);
        if ($size < 2) {
            return;
        }
        for ($i = 0; $i < $size; $i++) {
            for ($j = $size-1; $j >= $i+1; $j--) {
                if ($a[$j] < $a[$j-1]) {
                    $tmp = $a[$j];
                    $a[$j] = $a[$j-1];
                    $a[$j-1] = $tmp;
                }
            }
        }
    }
}

/**
 * InsertionSort, рeализует алгоритм сортировки вставками
 */
class InsertionSort extends StrategySort
{
    public function sort(&$a)
    {
        $size = count($a);
        if ($size < 2) {
            return;
        }
        for ($i = 1; $i < $size; $i++) {
            $j = 0;
            $buff = $a[$i];
            for ($j = $i-1; $j >= 0; $j--) {
                if ($a[$j] < $buff) {
                    break;
                }
                $a[$j+1] = $a[$j];
            }
            $a[$j+1] = $buff;
        }
    }
}


/**
 * Context, рeализует контекст выполнения той или иной стратегии
 */
class Context
{
    /**
     * @var StrategySort
     */
    protected $strategy;

    /**
     * Подмена стратегии (алгоритма)
     */
    public function algorithm(StrategySort $a)
    {
        $this->strategy = $a;
    }

    /**
     * Сортировка в зависимости от выбраной стратегии (алгоритма)
     */
    public function sort(&$a)
    {
        $this->strategy->sort($a);
    }
}
