<?php

//listing 2.57 str. 129
function dodajJeden($liczba)
//function dodajJeden(&$liczba)
{
    echo "$liczba ";
$liczba=$liczba + 1;
    echo "$liczba ";
}

$liczba=1;
echo "przed wywolaniem funkcji \$liczba=$liczba <br>";
dodajJeden($liczba);
echo "po wywolaniu funkcji \$liczba=$liczba <br>";
?>