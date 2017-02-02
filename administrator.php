<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<br>
<br>
<br>
<br>

<?php



$sql = "SELECT * FROM plaats WHERE id_plaats =" . $id;
$result = $mysqli->query($sql);



while ($row = $result->fetch_assoc()) {

?>



<h1><?php echo $row['locatie'];?></h1>
<hr>
<form action="?action=selectadmin&id=<?php echo  $id ?>"method="post">
  <h2>DELETE</h2>
  <input type="hidden" name="id" value"<?php echo $row['id_plaats']?>">

  <br>
<input type="submit" name="delete" value="Delete">

</form>

<br>

<hr>

<h2>UPDATE</h2>
<form action="?action=selectadmin&id=<?php echo  $id ?>"method="post">

  <input type="text" name="schoolnaam" placeholder="Locatie" required="required">
  <input type="text" name="adress" placeholder="Beschrijving">
  <input type="text" name="zipcode" placeholder="Foto url">

  <input type="hidden" name="id" value="<?php echo $row['id_plaats']?>">

  <br>
  <br>
<input type="submit" name="update" value="Update">

</form>

<hr>


<?php } ?>


<?php



$sql = "SELECT * FROM verenigingplaats WHERE id_verenigingplaats =" . $id;
$result = $mysqli->query($sql);



while ($row = $result->fetch_assoc()) {

?>

<h2>CREATE VERENIGING</h2>
<form action="?action=selectadmin&id=<?php echo  $id ?>"method="post">

  <input type="text" name="schoolnaam" placeholder="Naam" required="required">
  <input type="text" name="adress" placeholder="Beschrijving">
  <input type="text" name="zipcode" placeholder="Foto url">

  <input type="hidden" name="id" value="<?php echo $row['id_verenigingplaats']?>">

  <br>
  <br>
<input type="submit" name="create" value="Create">

</form>



<?php } ?>

<form action="index.php?action=adminplaatsen" method="post">
  <br>
  <br>
<input type="submit"  value="Go back">

</form>



<?php @include('partials/footer.php'); ?>
