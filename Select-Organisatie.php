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

$naam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$telefoon = $_POST['telefoon'];
$email = $_POST['e-mail'];
$naamorganisatie = $_POST['naam-organisatie'];
$website = $_POST['website'];
$cultuurofkunst = $_POST['cunst'];
$plaats = $_POST['plaats'];



$sql = "INSERT INTO organisatie (Voornaam,Achternaam,Telefoon,mail,NaamOrganisatie,Website,CultuurOfKunst,Plaats) VALUES ('$naam','$achternaam','$telefoon','$email','$naamorganisatie','$website','$cultuurofkunst','$plaats')";



if(!mysqli_query($con,$sql))
{

echo 'Not inserted';

}
else {

  echo 'Inserted';
}

header("refresh:2; url=index.php");

 ?>
