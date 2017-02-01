<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<?php



$sql = "SELECT * FROM plaats WHERE id_plaats =" . $id;
$result = $mysqli->query($sql);

echo "string";

while ($row = $result->fetch_assoc()) {

?>

  # code...



    <!-- Header -->
            <header>
                <div class="container">
                    <div class="image" style="background: url('images/media/<?php echo $row['foto'];?>') center;">
                        <div class="overlay">
                            <h1>  <?php echo $row['locatie']; ?>  </h1>
                            <p> <?php echo $row['beschrijving']; ?></p>
                            <a href="#" class="btn">Evenementen</a>
                        </div>
                    </div>
                </div>
            </header>

<?php } ?>
    <!-- End Header -->


    <!-- Locaties -->
		<section id="locations">
			<div class="container">

			<aside>
				<div class="btn active" id="btn-all">Alles</div>
				<div class="btn" id="btn-cultuur">Cultuur</div>
				<div class="btn" id="btn-kunst">Kunst</div>
			</aside>



			<div class="thumbs">


              <?php



              $sql = "SELECT * FROM vereniging WHERE id_vereniging =" . $id;
              $result = $mysqli->query($sql);



              while ($row = $result->fetch_assoc()) {

              ?>


				<div class="col-25 filter-kunst" style="background: url('<?php echo $row['foto'];?>') no-repeat center top; background-size: cover;">
          
					<a href="#">
					    <div class="overlay">
					        <h3>  <?php echo $row['naam']; ?></h3>
					        <p>

                    <?php echo $row['beschrijving'];?>
					        </p>
					    </div>
					</a>
				</div>

<?php } ?>
			</div>

			<div class="pagination">
				<li>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
				</li>
			</div>

			</div>
		</section>
	<!-- End Locaties -->





<?php @include('partials/footer.php'); ?>
