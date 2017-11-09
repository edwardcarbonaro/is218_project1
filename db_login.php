<?php
require "db.php";
$email = $_POST["email"];
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
			
		}			
	}
	else{
		echo "Email was found but password does not match";
	}

			
}	
else{
	echo "That email does not exist in the database";
}



?>