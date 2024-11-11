<?php
//вывести предпоследний символ если строка больше 1
function secondLastSimvol($string){
    if (strlen($string) > 1){
        echo "Предпоследний символ строки: " . substr($string, -2, 1) . "\n";
    }
    else{
        echo "Строка пустая";
    }
}
secondLastSimvol("Hello");
secondLastSimvol("");
?>