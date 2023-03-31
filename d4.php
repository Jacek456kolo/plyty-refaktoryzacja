<?php

//$array = ['lastname', 'email', 'phone'];
$ciag='ciag znakow i dodatek';
//var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
var_dump(explode(" ", $ciag));

print_r($ciag);



$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"


print_r($array);

$ciag='ciag';
strrev($ciag);
print_r($ciag);

$countries = [0 => 'Polska', 4 => 'Belgia', 6 => 'Francja', 10 => 'Anglia'];

$reversed_countries = array_reverse($countries);
$reversed_countries = array_reverse($countries, TRUE);

var_dump(implode(",", $reversed_countries));

print_r($reversed_countries);
?>