<?php

//cw. 5.5 str. 117

/*
$i=0;
while(true){
echo "napis [i=$i] <br>";
    if ($i>=9) break;
    $i++;
}
*/

$i=0;

for ($j=0; $j<=20; $j++) {
    if ($i <= 9) {
        echo $i;
        $i++;
    }
}



?>