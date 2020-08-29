<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Bookie</title>
	</head>
	
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div>
				<?php
					if(isset($_SESSION['userId'])){
						echo '<form action="includes/logout.inc.php" method="post">
							<button type="submit" name="logout-submit">Logout</button>
						</form>';
					}
					else{
						echo '<form action="includes/login.inc.php" method="post">
							<input type="text" name="mailcid" placeholder="College ID/E-mail...">
							<input type="password" name="pwd" placeholder="Password...">
							<button type="submit" name="login-submit">Login</button>
						</form>
						<a href="signup.php">Signup</a>';
					}
				?>
					
					
				</div>
			</nav>
		<header>
	<body>
</html>