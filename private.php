<?php
session_start();
echo $_SESSION["msg"]; 
unset($_SESSION["msg"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Private page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="wrap">
	<a href="logout.php" class="logout">Logout</a>
	<?php echo $_SESSION["username"]; ?>
	<h1>Private Page</h1>
</div>

</body>
</html>