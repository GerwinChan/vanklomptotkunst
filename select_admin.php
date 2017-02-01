<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<br>
<br>
<br>
<br>

<?php



$mysqli = new mysqli('localhost', 'root', '', 'klomptotkunst');

if ($mysqli->connect_errno) {
    echo "Failed to connect(" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $schoolnaam = $_POST['schoolnaam'];
    $adress = $_POST['adress'];
    $zipcode = $_POST['zipcode'];
    $sql = "UPDATE plaats SET locatie = '  $schoolnaam  ', beschrijving = '  $adress  ', foto = '  $zipcode  ' WHERE id_plaats = '$id'";
    $result = $mysqli->query($sql);
    if(mysqli_error($mysqli)){
        echo mysqli_error($mysqli);
        echo "<br>";
        echo($sql);
    }
    else{
        echo "<h1>UPDATED</h1>";

    }
}



if(isset($_POST['delete'])) {
    $sql = "DELETE FROM plaats WHERE id_plaats = $id";
    $result = $mysqli->query($sql);
    if(mysqli_error($mysqli)){
        echo mysqli_error($mysqli);
        echo "<br>";
        echo($sql);
    }
    else{
        echo "<h1>DELETED</h1>";
    }
}



 ?>

 <?php @include('partials/footer.php'); ?>
