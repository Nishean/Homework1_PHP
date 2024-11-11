<?php
//проверка на четность нечетность
function checkNumber($number){
    if ($number % 2 == 0){
        echo "Число $number - четное \n";
    }
    else{
        echo "Число $number - нечетное";
    }
}
checkNumber(4);
checkNumber(7);
?>