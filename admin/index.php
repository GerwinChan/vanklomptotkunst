<?php @include('partials/head.php'); ?>
<?php @include('partials/search-bar.php'); ?>
<?php @include('partials/nav.php'); ?>


<html>
<head>
<title>Admin login</title>
</head>

<body>
<h2>Admin Login Here</h2>
<form action="login_submit.php" method="post">
<fieldset>
<p>
<label for="phpro_username">Username</label>
<input type="text" id="phpro_username" name="phpro_username" value="" maxlength="20" />
</p>
<p>
<label for="phpro_password">Password</label>
<input type="text" id="phpro_password" name="phpro_password" value="" maxlength="20" />
</p>
<p>
<input type="submit" value="→ Login" />
</p>
</fieldset>
</form>
</body>
</html>


<?php @include('partials/footer.php'); ?>
