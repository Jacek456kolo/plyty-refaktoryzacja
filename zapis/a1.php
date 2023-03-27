<?php

// wczytanie starych danych

// otwarcie pliku do odczytu
$fp = fopen("plik.txt", "r");

//odczytanie danych
$stareDane = fread($fp, filesize("plik.txt"));

// zamknięcie pliku
fclose($fp);

// stworzenie nowych danych

$noweDane  = "To, co chcesz, żeby było 8\n";
//$noweDane .= $stareDane;

// zapisanie nowych danych

// otwarcie pliku do zapisu
$fp = fopen("plik.txt", "a");

// zapisanie danych
fputs($fp, $noweDane);

// zamknięcie pliku
fclose($fp);

echo 'done'
?>
