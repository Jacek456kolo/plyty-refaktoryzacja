<?php

$a=1;
$b=1;
$c=-2;

$delta=$b*$b-4*$a*$c;
echo "delta=" . $delta . "   ";

if ($delta<0) {
    echo "delta < 0";
}
else if ($delta==0)
    {
        $x1 = -$b / (2 * $a);
        echo "delta = 0";
        echo "x1=x2=", $x1;
    }
else
{
        echo "delta > 0   ";
        echo "delta=" . $delta . "   ";
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        echo "x1=", $x1 . " ";
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        echo "x2=", $x2;
    }


?>

