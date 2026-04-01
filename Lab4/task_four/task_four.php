<?php

function sumThreeElem($a, $b, $c): int 
{
    return (int)$a + (int)$b + (int)$c;
}

if (isset($_GET['start']) && isset($_GET['finish'])) {  
    $start = (int)$_GET['start'];
    $finish = (int)$_GET['finish'];


    if ($start < 100000 || $start > 999999 || $finish < 100000 || $finish > 999999 || $start > $finish) {
        print("Некорректный ввод");   
    } else {
        for ($i = $start; $i <= $finish; $i++) {
            $s = (string)$i;
            

            if (sumThreeElem($s[0], $s[1], $s[2]) === sumThreeElem($s[3], $s[4], $s[5])) {
                print($i . "<br>");
            }
        }
    }
}
?>