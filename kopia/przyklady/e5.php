<?php

$input = fopen('php://stdin', "r");
$output = fopen('php://stdout', "w");

$stdin="1 65 32";
//$stdin=['1','65','32'];
print_r($stdin);

var_dump(explode(",", $stdin));

//var_dump(explode(" ", $stdin));

$reversed_array = array_reverse($stdin, TRUE);

var_dump(implode(" ", $reversed_array));



fwrite($output, $reversed_array);

fclose($input);
fclose($output);

?>
