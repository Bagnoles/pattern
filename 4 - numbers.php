<?php

/* Простые делители числа 13195 — 5, 7, 13 и 29. Каков самый большой делитель числа
600851475143, являющийся простым числом? */



function isSimpleNum(int $num) : bool {

    for ($i = 2; $i < sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;

}

function maxSimpleDiv(int $num) : int {

    if (isSimpleNum($num)) {
        return $num; // если само число является простым
    }
    $max = 1;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0 && isSimpleNum($i)) {
            $max = $i;
        }
    }
    return $max;
}

/*
function maxSimpleDiv(int $num) : int {      // это работает для больших чисел, но не работает для маленьких

    $i = 2;
    while ($i * $i < $num) {
        while ($num % $i == 0) {
            $num = $num / $i;
        }
        $i++;
    }
    return $num;

}
*/

echo maxSimpleDiv(600851475143);

// Ответ 6857.