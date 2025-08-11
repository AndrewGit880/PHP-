<?php

$grade = 79;

if ($grade >= 90) {
    echo "Отлично!";
} elseif ($grade >= 80) {
    echo "Очень хорошо!";
} elseif ($grade >= 70) {
    echo "Хорошо";
} else {
    echo "Нужно подтянуться";
}