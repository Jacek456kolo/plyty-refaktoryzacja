<body>

<?php
if(isset($_POST['haverrors']))
{
?>
    <p>Zle wypelnione</p>

<?php
}
?>

<div class="tlo"></div>

<form action="send-album-to-db.php" method="post" enctype="multipart/form-data">
    <div class="wykon">Wykonawca
        <input type="text" name="no1" class="no1" value="">
    </div>

    <div class="tyt">Tytul
        <input type="text" name="no2" class="no2" value="">
    </div>

    <div class="rok">Rok
        <input type="text" name="no3" class="no3" value="">
    </div>




    <div>
        <input type="submit" name="submit" id="submit1" value="Przeslij">
    </div>

    <input type="file" name="okladka" id="submit2">


</form>

<div>

</div>



</body>