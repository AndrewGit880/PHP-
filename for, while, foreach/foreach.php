<?php

$colors = array("green", "yellow", "white");
foreach ($colors as $color) {
    echo $color . " ";
}

foreach ($colors as $index => $color) {
    echo "Индекс: $index, Цвет: $color" . PHP_EOL;
}