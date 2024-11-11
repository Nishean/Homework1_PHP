<?php
//проверка на, то совпадают ли первые буквы дангных слов
function checkFirstLetter($word1, $word2){
    if (mb_substr($word1, 0, 1) == mb_substr($word2, 0, 1)) {
        echo "Первые буквы совпадают \n";
    }
    else{
        echo "Первые буквы не совпадают";
    }
}
checkFirstLetter("арбуз", "абрикос");
checkFirstLetter("ананас", "банан");
?>