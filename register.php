<?php
session_start();
echo $_SESSION["msg"]; 
unset($_SESSION["msg"]);

if ($_SERVER["REQUEST_METHOD"] == "POST"):

	$pass = $_POST["pass"];
	$hash = password_hash($pass, PASSWORD_DEFAULT);
	$username = $_POST["username"];

	$db_server = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "login";
	@$db = new mysqli($db_server, $db_user, $db_pass, $db_name);
	if ($db->connect_error) {
		$_SESSION["msg"] = "<p class='error'>Connection error!</p>";
		header("Location: register.php");
		exit;
	} 

	$sql=$db->prepare("SELECT * FROM login WHERE username = ?");
	$sql->bind_param("s", $username);
	$sql->execute();
	$result = $sql->get_result();
	$sql->close();
	if ($result->num_rows) {
		$db->close();
		$_SESSION["msg"] = "<p class='error'>User already exists!</p>";
		header("Location: register.php");
		exit;
	}

	$sql=$db->prepare("INSERT INTO login(username, pass) VALUES(?, ?)");
	$sql->bind_param("ss", $username, $hash);
	$sql->execute();
	$sql->close();
	$db->close();
	$_SESSION["msg"] = "<p class='message'>User added!</p>";
	header("Location: login.php");
	exit;
	
else: 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Authentication</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="wrap">
	<a href="index.php">Back</a>
	<h1>Register Form</h1>
	<form action="register.php" method="POST">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="pass">Password</label>
			<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-default">Register</button>
	</form>
</div>

</body>
</html>

<?php 
endif;
?>