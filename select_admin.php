<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<br>
<br>
<br>
<br>

<?php

include 'include/config.php';
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno)

{
    echo "Failed to connect to MySQL:
    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



if(isset($_POST['login'])){
$id = $_POST['id'];
    $schoolnaam = $_POST['locatienaam'];
    $adress = $_POST['beschrijf'];
    $zipcode = $_POST['foto'];


    $sql = "UPDATE `plaats` SET `locatie` = '" . $schoolnaam . "', `beschrijving` = '" . $adress . "', `foto` = '" . $zipcode . "' WHERE `id_plaats` ='$id'";
    $result = $mysqli->query($sql);
    if(mysqli_error($mysqli)){
        echo mysqli_error($mysqli);
        echo "<br>";
        echo($sql);
    }
    else{
        echo "<h1>School is Geupdate</h1>";
    }
}



 ?>

 <?php @include('partials/footer.php'); ?>
