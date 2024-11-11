<?php
//вывод последнего символа строки
function lastSimvol($string){
    if (strlen($string) > 0){
        echo "Последний символ - ". substr($string, -1) ."\n";
    }
    else{
        echo "Строка пустая";
    }
}
lastSimvol("Hello");
lastSimvol("");
?>