<?php
//проверка на отрицательность числа
function checkNumOtr($number){
    if ($number < 0){
        echo "Число $number отрицательное \n";
    }
    else{
        echo "Число $number не отрицательное";
    }
}
checkNumOtr(-5);
checkNumOtr(1);
?>