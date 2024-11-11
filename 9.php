<?php
//функция обрезки строк или добавления символа
function trimOrAddLine(array $strings, $simvol = '*'){
    $result = [];
    foreach ($strings as $str){
        if (strlen($str) > 5){
            $result[] = substr($str, 0, 5);
        }
        else{
            $result[] = $str . $simvol;
        }
    }
    return $result;
}
$string = trimOrAddLine(["Hi", "HelloWorld", "PHP", "IvanovNiktia"]);
print_r($string);
?>