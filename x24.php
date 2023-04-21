<?php
//listing 3.22 str. 212

function getCounter()
{
    if(!file_exists("./licznik.txt")){
    return false;
    }

    if(!$fd=fopen("./licznik.txt","r+")){
        return false;
    }
    flock($fd, LOCK_EX);
    $count=fgets($fd);
    if(is_numeric($count)){
        $result=$count+1;
        fseek($fd, 0);
        fputs($fd, $result);
    }
    else{
        $result=false;
    }
    flock($fd, LOCK_UN);
    fclose($fd);
    return $result;
}

function getCounterStr($dateStr){
    if (($count=getCounter()) !== false){
        if($count==1){
            $razy='raz';
        }
        else{
            $razy='razy';
        }
        return "Ta strona zostala odwiedzona $count $razy "."od $dateStr roku.";
    }
    else {
    return "Licznik odwolan jest czasowo niedostepny.";
    }
}
?>

<DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
        <title>Moja strona www</title>
    </head>
    <body>
    <p>
        <?php
        echo getCounterStr("18 kwietnia 2023");
        ?>

    </p>
    </body>
    </html>
