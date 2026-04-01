<?php

function getZodiacSign($date) {
    $day = 0;
    $month = 0;
    $year = 0;

    $day = ($date[0] - '0') * 10 + ($date[1] - '0');
    $month = ($date[3] - '0') * 10 + ($date[4] - '0');
    $year = ($date[6] - '0') * 1000 + ($date[7] - '0') * 100 + ($date[8] - '0') * 10 + ($date[9] - '0');
    
    if ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1) {
        echo "Неверная дата\n";
        return;
    }

    $daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];


    $isLeap = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
    if ($isLeap) {
        $daysInMonth[1] = 29; 
    }

    if ($day > $daysInMonth[$month - 1]) {
        echo "Неверная дата\n";
        return;
    }



    if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
        echo "Козерог\n";
        return;
    }
    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        echo "Водолей\n";
        return;
    }
     if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        echo "Рыбы\n";
        return;
    }
     if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        echo "Овен\n";
        return;
    }
    if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        echo "Телец\n";
        return;
    }
    if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        echo "Близнецы\n";
        return;
    }
    if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        echo "Рак\n";
        return;
    }
    if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        echo "Лев\n";
        return;
    }
    if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        echo "Дева\n";
        return;
    }
     if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        echo "Весы\n";
        return;
    }
    if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        echo "Скорпион\n";
        return;
    }
    if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        echo "Стрелец\n";
        return;
    }

} 
if ($_POST){
   getZodiacSign($_POST["date"]); 
}

