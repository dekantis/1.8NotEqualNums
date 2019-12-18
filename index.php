<?php

//Задача: Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.

//Функция поиска одинковых цифр числа
function notEqualNums(int $number): bool
{
    $numeric = $number % 10;
    $number = (int)($number/10);
    $numberCut = $number;//Целая часть после деления для последующих итераций
    while ($number > 0) {
        if ($number % 10 == $numeric) { //Сравнение текущей цифры с искомой
            return false;
        }
        $number = (int)($number / 10);
    }
    return $numberCut>0?notEqualNums($numberCut):true;
}

//перебор четырехзначных чисел с учетом первого возможного числа и последнего
for ($i = 1023; $i<9877; $i++) {
    if (notEqualNums($i)) {
        echo $i."\n";
    }
}