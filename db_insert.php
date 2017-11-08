<?php
require "db.php";


$sql = "INSERT INTO accounts(id,fname,email,lname)
		VALUES(id,'" . $_POST["firstName"] . "','" . $_POST["lastName"] . "','" . $_POST["email"] . "')";
runQuery($sql);

?>