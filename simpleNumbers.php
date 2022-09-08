<?php

/*
Выписав первые шесть простых чисел,
получим 2, 3, 5, 7, 11 и 13. Очевидно, что 6-е
простое число — 13. Какое число является
10001-м простым числом?
*/

function isSimpleNum(int $num) : bool {

    for ($i = 3; $i < $num; $i += 2) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;

}

$simpleArr = [2, 3, 5, 7, 11, 13];

for ($i = 15; $i < 105000; $i += 2) {
    if (isSimpleNum($i)) {
        $simpleArr[] = $i;
    }
}

var_dump($simpleArr[10000]); // 10001 простое число это 104743