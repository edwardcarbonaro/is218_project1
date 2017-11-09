<?php
require "db.php";
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT email FROM accounts WHERE email='$email'";
if(runQuery($sql)==true)
	{
		$sql = "SELECT fname,lname FROM accounts where email='$email'";
		$results = runQuery($sql);		
		foreach($results as $row){
			echo $row["fname"] . " " . $row["lname"];
			
		}

	}
else
{
	echo "That email does not exist in the database";
}


?>