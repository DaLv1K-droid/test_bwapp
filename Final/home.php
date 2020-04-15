<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="#" ><img class="logo" src="https://www.iisecurity.in/images/iislogo.png"></a>
				<!--<a href="profile.php"><i class="fas fa-user-circle"></i>Details</a>-->
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2 style="font-size:25px;">Web Application Security Labs</h2>
			<p style="font-size:22px;">Hey there, <?=$_SESSION['name']?>!</p>
		<table class="nav" align="center">
			<tr>
				<td>
					<a href="http://18.222.186.201/DVWA/" class="button">DVWA</a>
					<a href="http://18.222.186.201/bWAPP/" class="button">bWAPP</a>
					<a href="http://18.222.186.201/sqlilabs/" class="button">SQLI-LABS</a>
					<a href="#" class="button">MUTILLIDAE</a>
			 </td>
			</tr>
		</table>


		</div>
	</body>
</html>