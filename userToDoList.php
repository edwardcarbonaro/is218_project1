<?php
session_start();
require "db.php";
//Sets Variables
$email = $_SESSION['email'];
$firstName = $_SESSION['userFirstName'];
$lastName = $_SESSION['userLastName'];

//Displays uncompleted to do list items
echo "Welcome to Your To-Do List:  " . $firstName . " " . $lastName;
$sql = "SELECT * FROM todos WHERE owneremail='$email' AND isdone='0'";
$results = runQuery($sql);
echo "<ul>";
foreach($results as $row){
	echo "<li class='list-group-item'>" . $row['message'] ." |  Due Date: ".  $row['duedate']  . "</li>";			
}
echo "</ul>";
//End of Displays Uncompleted

//Displays completed to do list items
echo "These are your completed to-do items";
$sql = "SELECT * FROM todos WHERE owneremail='$email' AND isdone='1'";
$results = runQuery($sql);
echo "<ul>";
foreach($results as $row){
	echo "<li class='list-group-item'>" . $row['message'] ."|  Due Date: ".  $row['duedate'] . "</li>";			
}
echo "</ul>";
//End of Display Completed Items


?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    <form>
  		<div class="form-group">
   			<label for="formGroupExampleInput">Add a To-Do List Item</label>
    		<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">    		
  		</div>
  		
	</form>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>





