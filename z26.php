<?php
//listing 3.8 str. 194

function listDir($dir)
{
    if(!chdir($dir)){
        echo "Brak uprawnien1";
        return;
    }
    $dir=getcwd();
    if(!$fd=opendir($dir)){
        echo "Brak uprawnien2";
        return;
   }
    $dir=str_replace("\\", "/", $dir);
    if (($count=strlen($dir))>0){
        if($dir[$count-1]=='/'){
    $dir=substr($dir, 0, $count-1);
    }
    }
    while (($file=readdir($fd)) !== false){
    if($file==".") continue;
    if(is_dir($dir. "/". $file)) {
        $path = urlencode($dir. "/". $file);
        $link = "<a href=\"index.php?>";
    $link .= "dir=$path\">$file</a>\n";
    echo $link;
    }
    else {
        echo $file;
    }
    echo "<br>";
    }
    closedir($fd);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title>Nawigacja po katalogach</title>
</head>
<body>
<div>
<?php
    if(isSet($_GET['dir'])){
    $dir=$_GET['dir'];
}
    else{
        $dir='/';
    }
    if($dir=='') $dir="/";
    listDir($dir);
    ?>
</div>
</body>
</html>
