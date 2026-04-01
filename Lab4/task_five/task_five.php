<?php
function factorial($n) {

    if ($n <= 1) {
        return 1;
    }
    
    return $n * factorial($n - 1);
}

if ($_POST) {

    $input = (int)$_POST["number"]; 
    
    if ($input < 0) {
        echo "Ошибка: число не может быть отрицательным";
    } else {
        echo "Результат: " . factorial($input); 
    }
}