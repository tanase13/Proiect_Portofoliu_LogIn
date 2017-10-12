<?php

if(isset($_POST['submit'])){

	include_once 'dbh.inc.php'; //includem baza de date

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd= mysqli_real_escape_string($conn, $_POST['pwd']);

	if(empty($first) || empty($last) || empty($email) || empty($pwd)){
		header("Location: ../join.php?join=empty");
		exit();
	} else{
		//Check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){ //scriem ce caractere nu avem voie sa folosim pentru campul first & last, si punem in fata !(not)
		header("Location: ../join.php?signup=invalid");
		exit();
		} else {
			//Check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../join.php?signup=email");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);


				if($resultCheck>0) {
					header("Location: ../join.php?signup=emailtaken");
					exit();
				} else {
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) VALUES ('$first', '$last','$email', '$hashedPwd');";

					mysqli_query($conn, $sql);
					header("Location: ../created.php?signup=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../join.php");
	exit();
}
