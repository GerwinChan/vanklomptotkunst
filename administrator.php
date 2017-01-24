<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<br>
<br>
<br>
<br>


<form action="select_admin.php"method="post">
  <h2>Edam</h2>
  <br>

  Locatie Naam
    <input type="text" name="locatienaam">

    beschrijving
      <input type="text" name="beschrijf">


      Foto
        <input type="file" name="foto">


    <input type="submit" name="login" value="UPDATE">

    <input type="hidden" name="id" value="{$oneItem.idSchool}"></td>
</form>




<?php @include('partials/footer.php'); ?>
