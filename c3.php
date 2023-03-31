<?php

$k1='';

$input = fopen('test.txt', "r");
$output = fopen('test-o.txt', "w");

//$stdin="1 2 3";

//fread($input, "10");
//echo $input;
//fwrite($output, "3 2 1");

$numbers = fgets($input);

echo $numbers;
?>

<br>

<?php
echo strrev($numbers);

echo $k1;

fwrite($output, $k1);

fclose($input);
fclose($output);

?>
