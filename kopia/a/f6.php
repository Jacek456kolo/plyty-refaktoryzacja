<?php

$input = fopen('php://stdin', "r");
$output = fopen('php://stdout', "w");


$k1=fgets($input);
$k2=explode(" ", $k1);

$reversed_array = array_reverse($k2, TRUE);

$k3=implode(" ", $reversed_array);

fwrite($output, $k3);

fclose($input);
fclose($output);

?>
