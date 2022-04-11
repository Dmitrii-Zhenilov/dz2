<?php
/**
 * Задание #1
Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.
 */
function exercise1(array $strings, bool $return = true)
{
    $result = implode("\n",array_map(function (string $string) {
        return "<p>$string</p>";
    }, $strings));

    if ($return) {
        return $result;
    }

    echo $result;
}
/**
 * Задание #2

Функция должна принимать переменное число аргументов.
Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
Остальные аргументы это целые и/или вещественные числа.
Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2
 */
function exercise2(string $action, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n . 'is not integer or float');
            return 'ERROR: wrong argument';
        }
    }
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg) {
                if ($arg == 0) {
                    trigger_error('derive by zero on argument #' . ($n + 1));
                    return 'ERROR: derive by zero';
                }
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }

            return $result;

        default:
            return 'ERROR: unknown actions';
    }
}
/**
 * Задание #3

Функция должна принимать два параметра – целые числа.
Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию. (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8). Таблица должна быть выполнена с использованием тега <table>
В остальных случаях выдавать корректную ошибку.
 */
function exercise3($a, $b)
{
    if(!is_int($a)) {
        trigger_error('a is not int');
        return false;
    }
    if(!is_int($b)) {
        trigger_error('b is not int');
        return false;
    }

    if($a < 0 || $b < 0) {
        trigger_error('arg be positive');
        return false;
    }

    $result = '<table>';
    for($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for($j = 1; $j <= $b; $j++){
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}