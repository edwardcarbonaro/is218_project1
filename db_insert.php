<?php
require "db.php";

$sql = "INSERT INTO accounts(fname,lname,email,phone,birthday,gender) 
		VALUES(firstName,lastName,email,phoneNumber,birthday,gender)";
runQuery($sql);

?>