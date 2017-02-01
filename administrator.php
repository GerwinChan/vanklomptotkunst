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




<form action="?action=selectadmin&id=<?php echo  $id ?>"method="post">
  <h2><?php echo $row['locatie'];?></h2>
  <input type="hidden" name="id" value"<?php echo $row['id_plaats']?>">

  <br>
<input type="submit" name="delete" value="Delete">

</form>

<br>

<hr>

<form action="?action=selectadmin&id=<?php echo  $id ?>"method="post">

  <input type="text" name="schoolnaam" placeholder="Locatie" required="required">
  <input type="text" name="adress" placeholder="Beschrijving">
  <input type="text" name="zipcode" placeholder="Foto">

  <input type="hidden" name="id" value="<?php echo $row['id_plaats']?>">

  <br>
  <br>
<input type="submit" name="update" value="Update">

</form>



<?php } ?>


<?php @include('partials/footer.php'); ?>
