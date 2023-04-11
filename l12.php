<?php
$A=1;
$B=1;
$C=-2;

echo "parametry rownania <br>";
echo "A=$A, B=$B, C=$C <br>";

if($A==0){
echo "to nie jest rownanie kwadratowe A=0! <br>";
}
else {
echo "to jest rownanie kwadratowe <br>";
}

$delta=$B*$B-4*$A*$C;

if ($delta<0) {
        echo "delta < 0 <br>";
        echo "rownanie nie ma rozwiazan w zbiorze liczb rzeczywistych <br>";
}
elseif($delta==0){
    $x1=-$B/(2*$A);
    echo "x1=$x1";
}

    elseif($delta>0){
    $x1=(-$B-sqrt($delta))/(2*$A);
    echo "x1=$x1 <br>";
    $x2=(-$B+sqrt($delta))/(2*$A);
    echo "x2=$x2 <br>";
    }