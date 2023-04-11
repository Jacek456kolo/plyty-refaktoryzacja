<?php
//cw. 6.4 str. 133
function poteguj($podstawa, $wykladnik){
    return $podstawa**$wykladnik;
}

$k1=2;
$k2=8;

if ($k2==NULL) $k2=1;

$wartosc=poteguj($k1, $k2);
echo "$k1^$k2: $wartosc";