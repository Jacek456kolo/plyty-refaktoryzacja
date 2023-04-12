<?php
//cw. 6.5 str. 133

function przyjmij($wart1, $wart2)
{
    if ($wart1 < $wart2) {
    echo "$wart1 < $wart2 <br>";
    echo "mniejsza wartosc: $wart1 <br>";
}

    if ($wart1 > $wart2) {
        echo "$wart2 < $wart1 <br>";
        echo "mniejsza wartosc: $wart2 <br>";
    }

    if ($wart1 == $wart2) {
        echo "$wart1 = $wart2 <br>";
        echo "obie wartosci sa rowne <br>";
    }
}

przyjmij (4, 7);


?>