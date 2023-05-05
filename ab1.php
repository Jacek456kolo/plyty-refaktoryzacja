<?php
//listing 7.6 str. 361

//$host="localhost\plyty-refaktoryzacja";
//$host="C:\Users\Rozowy\JacekProjekty\plyty-refaktoryzacja";
//$host="rozowy";
//$host="my-site";
//$host="ftp://my-site";
//$host="ftp://192.168.33.120";
$host="192.168.33.120";

$user="anonymous";
$pass="";
$plik_lokalny="plyta1.php";
$plik_zdalny="plyta.php";

//$plik_zdalny="C:\Users\Rozowy\JacekProjekty\plyty-refaktoryzacja\plyta.php";

if(!$ftpid=ftp_connect($host)){
    exit("Nie moge nawiazac polaczenia z serwerem ftp \n");

}
echo "Polaczenie z serwerem $host zostalo nawiazane \n";

    if(!ftp_login($ftpid, $user, $pass)){
    ftp_close($ftpid);
    exit("Wystapil blad przy probie logowania \n");
        }
        else {
        echo "Logowanie zakonczone sukcesem \n";
}

//echo "$plik_lokalny, $plik_zdalny";

        if(!ftp_get($ftpid, $plik_lokalny, $plik_zdalny,FTP_BINARY)){
        exit("Blad przy probie pobrania pliku $plik_zdalny");
        }
        else {
            echo "Plik $plik_zdalny zostal pobrany i zapisany jako $plik_lokalny \n";
        }

        if(!ftp_close($ftpid)){
        echo "Blad przy probie zakonczenia polaczenia \n";
        }
        else{
            echo "Polaczenie zostalo zakonczone \n";
        }
        ?>