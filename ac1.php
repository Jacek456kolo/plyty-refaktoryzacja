<?php

//listing 2.56 str. 127
function func()
{
static $liczba=10;
echo "\$liczba=$liczba <br>";
$liczba += 20;
}
func();
func();
?>