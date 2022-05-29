<?php

/* Реализовать удаление элемента массива по его значению. Обратите внимание на возможные
дубликаты!
*/

$array = [5, 6, 8, 3, 4, 3, 9, 12, 1];

function binarySearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while ($start <= $end) {
        $n++;
        $base = floor(($start + $end) / 2);

        if ($myArray[$base] == $num) {
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }
    }
    return null;
}

function deleteElem($array, $elem) {

    sort($array);

    do {
        $index = binarySearch($array, $elem);

        if (!is_null($index)) {
            array_splice($array, $index, 1);
        }

    } while ($index);

    return $array;
}

deleteElem($array, 3);

