<?php
$i=0;
While($i < 10) {
    echo "Petla while[i=$i]";
    echo "<br>";
    $i++;
}

$j=30;
for ($i=0; $i<30; $i++){

//    echo "i=$i j=$j <br>";
    if ($j % 3 ==0) echo "j=$j <br>";
    $j=$j-1;

}
echo "<br>";

for ($i=1; $i<10; $i++) {
    echo " i=$i ", 10-$i, "<br>";
}
?>
