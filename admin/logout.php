<?php
// Begin the session
session_start();

// Unset all of the session variables.
session_unset();

// Destroy the session.
session_destroy();

  header('refresh:2; url=index.php');
?>
<html>
<head>
<title>Logged Out</title>
</head>

<body>
<h2>You are now logged out. Please come again</h2>
</body>
</html>
