<?php
require "db.php";


$sql = "INSERT INTO accounts(id,fname,email,lname,phone,birthday,gender)
		VALUES(id,'" . $_POST["firstName"] . "','" . $_POST["lastName"] . "','" . $_POST["email"] . "',
				'" . $_POST["phoneNumber"] . "','" . $_POST["birthday"] . "','" . $_POST["gender"] . "')";
runQuery($sql);

echo $_POST["firstName"] . " " . $_POST["lastName"] . " has been registered";

?>