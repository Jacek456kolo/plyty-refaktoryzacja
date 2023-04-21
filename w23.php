<?php

//listing 2.78 str. 170

$kolory=array(
    "kolor1"=>"czerwony",
    "kolor2"=>"zielony",
    "kolor3"=>"niebieski"
);
echo "Zawartosc tablicy: <br>";
echo "kolory['kolor1']=".$kolory['kolor1']."<br>";
echo "kolory['kolor2']=".$kolory['kolor2']."<br>";
echo "kolory['kolor3']=".$kolory['kolor3']."<br>";

foreach($kolory as $kolor){
    echo $kolor, "<br>";
}

?>