<?php 

$year = $_POST['year'];
if ($year < 0 && $year >= 30000) {
    echo "Invalid input. Year is out of the range\n";
} else {
    if (($year % 400 === 0) || ($year % 4 === 0 && $year % 100 !== 0)) {
    echo "YES\n";
    } else {
        echo "NO\n";
    } 
}