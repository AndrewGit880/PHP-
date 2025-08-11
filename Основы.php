<?php


$str = "Строка";
$str2 = "Вторая строка";
$num = 5;
$num2 = 9;
$float = 1.10;
$bool = false;

$res = $num + 20;

echo $res;

$res2 = $float * $num;
echo "<p>" . $res2 . "</p>";

$combStr = $str . "  " . $str2;
echo "<p>Объединение: " . $combStr . "</p>";


if ($num2 > $num) {
    echo "<p>num2 больше num</p>";
} else {
    echo "<p>num2 меньше num</p>";
}

if ($num > 5) {
    echo "<p>num положительное число</p>";
} else {
    echo "<p>num не положительное число</p>";
}


if ($bool) {
    echo "<p>bool имеет значение true</p>";
} else {
    echo "<p>bool имеет значение false</p>";
}

function add($num)
{
    $result = $num + 5;
    return $result;
}

$new = add($num);
echo "<p>Результат функции: " . $new . "</p>";

$arr = [2, 4, "hello", true];

echo "<p>Элементы массива: ";
foreach ($arr as $value) {
    echo $value . " ";
}
