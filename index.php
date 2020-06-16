<?php
session_start();

if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<html>
<head>
	<title>HOME PAGE</title>
	<meta charset="utf-8">
</head>
<body>
	Congratulations User: <?php echo $_SESSION['username'];  ?> logged in successfully!
</body>
</html>