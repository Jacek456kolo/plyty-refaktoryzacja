<?php

//$array = ['lastname', 'email', 'phone'];
$ciag='ciag znakow i dodatek';
//var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
var_dump(explode(" ", $ciag));

print_r($ciag);




$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
$reversed_array = array_reverse($array, TRUE);
print_r($reversed_array);

print_r($array);

$ciag='ciag';
strrev($ciag);
print_r($ciag);

echo 'tutaj';
$countries = [0 => 'Polska', 4 => 'Francja', 6 => 'Belgia', 8 => 'Anglia'];
print_r($countries);

//$reversed_countries = array_reverse($countries);
$reversed_countries = array_reverse($countries, TRUE);

var_dump(implode(",", $reversed_countries));

echo 'teraz tu';
print_r($reversed_countries);
?>a