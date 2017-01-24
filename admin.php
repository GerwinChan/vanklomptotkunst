<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>

<br>
<br>
<br>

<div class="pagetitle"><h1>Admin</h1></div>
<form action="adminlogin.php"method="post">
    <input type="password" name="pass">

    <input type="submit" name="login" value="log in">
</form>




<?php @include('partials/footer.php'); ?>
