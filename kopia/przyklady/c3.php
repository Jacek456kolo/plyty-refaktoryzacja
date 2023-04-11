<?php


//$input = fopen('test.txt', "r");
//$output = fopen('test-o.txt', "w");

$input = fopen('php://stdin', "r");
$output = fopen('php://stdout', "w");

$stdin="1 2 3";

//fread($input, "10");
//echo $input;
//fwrite($output, "3 2 1");

$numbers = fgets($input);

echo $numbers;
?>

<br>

<?php

$kl1=strrev($numbers);
echo $kl1;

fwrite($output, $kl1);

fclose($input);
fclose($output);

?>
