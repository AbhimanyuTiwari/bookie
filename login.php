<?php
	require 'header.php';
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
		<div>
			<h1>Login</h1>
			
			<form action="includes/login.inc.php" method="post">
						<input type="text" name="mailcid" placeholder="College ID/E-mail...">
						<input type="password" name="pwd" placeholder="Password...">
						<button type="submit" name="login-submit">Login</button>
			</form>
		</div>
		
	<footer>
		<div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2020. All Rights Reserved</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                            <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>