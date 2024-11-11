<?php
//функция, которая округляет все символы в массиве
function roundingAllSymvols(array $numbers){
    $mas = [];
    foreach ($numbers as $number) {
        $mas[] = round($number);
    }
    return $mas;
}
$mas = roundingAllSymvols([-1.49, 2, 2.54, -3.7, 5, -6.43]);
print_r($mas);
?>