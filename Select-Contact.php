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
$vraag = $_POST['vraag'];



$sql = "INSERT INTO contact (voornaam,achternaam,telefoon,email,vraag) VALUES ('$naam','$achternaam','$telefoon','$email','$vraag')";



if(!mysqli_query($con,$sql))
{

echo 'Not inserted';

}
else {

  echo 'Inserted';
}

header("refresh:2; url=index.php");

 ?>
