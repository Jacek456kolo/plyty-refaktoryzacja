<?php

//listing 2.58 str. 130
function dodajjeden(&$liczb)
{
    $liczb = $liczb*2;
//    return $liczb;
}
$li=5;

echo ("przed wywolaniem funkcji \$liczba=$li <br>");
//$li2=dodajjeden($li);
dodajjeden($li);
echo ("po wywolaniu funkcji \$liczba=$li <br>");

?>