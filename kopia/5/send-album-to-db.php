<?php

echo "hello world ";

if ($_POST['no1']==="" || $_POST['no2']==="" || $_POST['no3']==="" || $_POST['no4']==="")
{
echo "Ktores pole puste";
exit();
}


if(isset($_POST['no1']))
{
echo $_POST['no1'];
echo $_POST['no2'];
echo $_POST['no3'];
echo $_POST['no4'];
}

$link = mysqli_connect("127.0.0.1", "root", "", "baza1");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//$string = "sdfs" . $link . "asdad" . 'asdasd' . '$fdsfds' . "$link";

//echo $_POST['no1'];

// Attempt insert query execution
//$sql = "INSERT INTO plyty1 (url1, wykonawca, tytul, rok) VALUES ('$_POST['no1']'. '$_POST['no2']'. '$_POST['no3']'. '$_POST['no4']')";

//INSERT INTO plyty1 (url1, wykonawca, tytul, rok) VALUES ('wykon','tyt','rok','')

$sql = "INSERT INTO plyty1 (url1, wykonawca, tytul, rok) VALUES ('" . $_POST['no4'] . "','" . $_POST['no1'] . "','" . $_POST['no2'] . "','" . $_POST['no3'] . "')";



if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);


?>
