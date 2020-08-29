<?php

if (isset($_POST['signup-submit'])){
	require 'dbh.inc.php';
	
	$name = $_POST['name'];
	$cid=$_POST['cid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];
	
	if (empty($name) || empty($email) || empty($password) || empty($passwordRepeat) || empty($cid)){
		header("Location: ../signup.php?error=emptyfield&name=".$name."&mail=".$email."&cid=".$cid);
		exit();
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$name && !preg_match("/^[a-zA-Z0-9]*$/",$cid))){
		header("Location: ../signup.php?error=invalidmailnamecid");
		exit();
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../signup.php?error=invalidmail&name=".$name);
		exit();
	}
	else if(!preg_match("/^[a-z A-Z]*$/",$name)){
		header("Location: ../signup.php?error=invalidname&mail=".$email);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$cid)){
		header("Location: ../signup.php?error=invalidcid&mail=".$email);
		exit();
	}
	else if($password !== $passwordRepeat){
		header("Location: ../signup.php?error=passwordcheck&name=".$name."&mail=".$email);
		exit();
	}
	else{
		
		$sql="SELECT cidUsers FROM users WHERE cidUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}	
	
		else{
			mysqli_stmt_bind_param($stmt,"s",$cid);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resutCheck>0){
				header("Location: ../signup.php?error=idtaken&mail=".$email."&name=".$name);
				exit();
			}
			else{
				$sql ="INSERT INTO users (cidUsers,nameUsers,emailUsers,pwdUsers) VALUES (?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt,$sql)){
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}
				else{
					$hashPwd=password_hash($password, PASSWORD_DEFAULT);
				
					mysqli_stmt_bind_param($stmt,"ssss",$cid,$name,$email,$hashPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
}
else{
	header("Location: ../signup.php");
	exit();
}
?>