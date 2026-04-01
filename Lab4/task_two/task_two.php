<?php



function numberToWord($digit)
{
    $numbers = [
        0 => "Zero",
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        5 => "Five",
        6 => "Six",
        7 => "Seven",
        8 => "Eight",
        9 => "Nine",
    ];
    return $numbers[$digit] ?? null;
}


$str = $_POST["digit"];
$result = numberToWord($str);
if ($result !== null) {
    echo "Number is " . $result . "\n";
} else {
    echo "It is not a number" . PHP_EOL;
}


