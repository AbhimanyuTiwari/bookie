<?php
	require "header.php";
?>

	<main>
		<div>
			<h1>Signup</h1>
			
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="name" placeholder="Full Name">
				<input type="text" name="mail" placeholder="E-mail">
				<input type="text" name="cid" placeholder="College ID">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Repeat Password">
				<button type="submit" name="signup-submit">Signup</button>
		</div>
	</main>
	
<?php
	require "footer.php";
?>