<?php

//Checking weather it is a valid request or not
if(isset($_POST['submit'])) {


    if ($_POST['no1'] === "" || $_POST['no2'] === "" || $_POST['no3'] === "" ) {
        echo "Ktores pole jest puste";
        exit();
    }



    //Taking the files from input
    $file = $_FILES['okladka'];
    //Getting the file name of the uploaded file
    $fileName = $_FILES['okladka']['name'];
    //Getting the Temporary file name of the uploaded file
    $fileTempName = $_FILES['okladka']['tmp_name'];
    //Getting the file size of the uploaded file
    $fileSize = $_FILES['okladka']['size'];
    //getting the no. of error in uploading the file
    $fileError = $_FILES['okladka']['error'];
    //Getting the file type of the uploaded file
    $fileType = $_FILES['okladka']['type'];

    $i = rand();

    move_uploaded_file($fileTempName, "uploads/okladki/" . md5($i) . ".jpg");

    print_r($_FILES);

    echo "hello world ";




    if (isset($_POST['no1'])) {
        echo $_POST['no1'];
        echo $_POST['no2'];
        echo $_POST['no3'];

    }

    $link = mysqli_connect("127.0.0.1", "root", "", "baza1");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

//$string = "sdfs" . $link . "asdad" . 'asdasd' . '$fdsfds' . "$link";

//echo $_POST['no1'];

// Attempt insert query execution
//$sql = "INSERT INTO plyty1 (url1, wykonawca, tytul, rok) VALUES ('$_POST['no1']'. '$_POST['no2']'. '$_POST['no3']'. '$_POST['no4']')";

//INSERT INTO plyty1 (url1, wykonawca, tytul, rok) VALUES ('wykon','tyt','rok','')

    $sql = "INSERT INTO plyty1 (url1, wykonawca, tytul, rok) VALUES ('" . $fileTempName . "','" . $_POST['no1'] . "','" . $_POST['no2'] . "','" . $_POST['no3'] . "')";


    if (mysqli_query($link, $sql)) {
        echo "Records inserted successfully.";

        header("HTTP/1.1 301 Moved Permanently");
        header("Location: show-all-albums.php");
        header('Connection: close');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

// Close connection
    mysqli_close($link);

}

?>

<?php
//$uploads_dir = '/uploads';
//foreach ($_FILES["pictures"]["error"] as $key => $error) {
//    if ($error == UPLOAD_ERR_OK) {
//        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
//        // basename() may prevent filesystem traversal attacks;
//        // further validation/sanitation of the filename may be appropriate
//        $name = basename($_FILES["pictures"]["name"][$key]);
//        move_uploaded_file($tmp_name, "$uploads_dir/$name");
//    }
//}
?>