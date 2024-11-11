<?php
//вывод первой цифры числа
function firstNumber($number){
    $firstNumber = (int) strval(abs($number))[0];
    echo "Первая цифра числа: $firstNumber";
}
firstNumber(2534671);
?>