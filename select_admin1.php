<?php



$con = mysqli_connect('localhost','root','');

if (!$con)
{

echo 'Not Connected To Server!';

}

if(!mysqli_select_db($con,'klomptotkunst'))
{

echo 'Database Not Selected';

}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $schoolnaam = $_POST['schoolnaam'];


    $sql = "UPDATE `plaats` SET `locatie` = '" . $schoolnaam . "' WHERE `id_plaats` ='$id'";

    if(mysqli_error($mysqli)){
        echo mysqli_error($mysqli);
        echo "<br>";
    
    }
    else{
        echo "<h1>School is Geupdate</h1>";
    }
}

?>
