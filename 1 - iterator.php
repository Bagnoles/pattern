<?php

/* Список директорий */

$dir = new DirectoryIterator("D:");

 foreach ($dir as $item) {
    echo $item . PHP_EOL;
}


