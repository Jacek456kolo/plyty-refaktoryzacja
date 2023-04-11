<!DOCTYPE html>
<html>
<head>
<metacharset="utf-8"
<title>Moja strona www</title</title>
    //listing 2.22 str. 89
    </head>
<body>
<div>
    <?php
    $napis1="napis pierwszy";
    $napis2="napis drugi";
    $napis3=$napis1." ".$napis2;
    echo "$napis3";
    echo "<br>";

//    $liczba1=8<<3;
//    echo "$liczba1";

    $liczba1=8.7;
    echo (float)$liczba1;
    echo "<br>";
    echo (int)$liczba1;

    ?>

</div>
</body>
</html>