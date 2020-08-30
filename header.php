<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Bookie</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
		
		
	
	<body>
		<div id="navigation">
			<div class="center">
				<a href="index.php">Home</a>
				<a href="#about">DashBoard</a>
				<a href="#service">Sell Books</a>
				<a href="#portfolio">Blogs</a>
				<a href="#contact">Contact Us</a>
			</div>
			<div class="left">
				<h1>Bookie</h1>
			</div>
			<div class="search-container">
				<form action="/action_page.php">
					<input type="text" placeholder="Search.." name="search" style="width: 200px;">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>

		</div>
		<div class="right">
			<?php
				if(isset($_SESSION['userId'])){
					echo '<form action="includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit" style="background-color: #0A2B30;color:#fff;width:100px;">Logout</button>
					</form>';
				}
				else{
					echo '<a style="background-color: #0A2B30;color:#fff;width:100px;" href="login.php">Login</a>
						<a style="background-color: #0A2B30;color:#fff;width:100px;" href="signup.php">Signup</a>';
					
				}
			?>
		
			
			
		</div>
	<body>
</html>