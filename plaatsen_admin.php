<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<br>
<br>
<br>
<br>

<h2>Create Update en Delete plaatsen</h2>

<br>



<?php



$sql = "SELECT * FROM plaats";
$result = $mysqli->query($sql);



while ($row = $result->fetch_assoc()) {

?>


<?php


// echo '<a href="index.php?action=admin&1id=1'">'.$row['locatie'].</a>';
echo '<a href="index.php?action=admin&id=' . $row['id_plaats'] . '">'.$row['locatie'].'</a>';


?>



<?php } ?>

<br>



<br>






<form action="admin/logout.php"method="post">


    <input type="submit" name="login" value="Log out">
</form>


<?php @include('partials/footer.php'); ?>
