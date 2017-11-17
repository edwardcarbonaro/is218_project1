<?php
session_start();
require "db.php";
$email = $_POST["email"];
$_SESSION["email"] = $email;
$password = $_POST["password"];

$sql = "SELECT email FROM accounts WHERE email='$email'";
if(runQuery($sql)==true){	
	$sql = "SELECT password FROM accounts WHERE email='$email'";
	$pw = runQuery($sql);
	
	foreach($pw as $x){
		$pw = $x["password"];
	}

	
	if($password == $pw){
		$sql = "SELECT fname,lname FROM accounts WHERE email='$email'";
		$results = runQuery($sql);

		foreach($results as $row){
			echo $row["fname"] . " " . $row["lname"];
			//Testing session variables
			$_SESSION["userFirstName"] = $row["fname"];
			$_SESSION["userLastName"] = $row["lname"];
			
			
		}			
	}
	//testing log in to stay on form.php
	//header("Location: form.php");
	else{
		echo "Email was found but password does not match";
	}

			
}	
else{
	echo "That email does not exist in the database";
}


header("Location: form.php");
?>

<!--
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="https://web.njit.edu/~ejc23/download/is218/project1/is218_project1/form.php">Go Back to Home Page</a>
</body>
</html>
-->