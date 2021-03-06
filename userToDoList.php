<?php
session_start();
require "db.php";
//Sets Variables
$email = $_SESSION['email'];
$firstName = $_SESSION['userFirstName'];
$lastName = $_SESSION['userLastName'];

//Header
echo "<header>";
echo "<h2>To-Do List For:  " . $firstName . " " . $lastName . "</h1>";
//Button to return to form.php
// echo "<br><a class='header' href='./form.php'> <button class=\"btn btn-secondary\"> Return Home </button></a>";
echo "<a class='header'  href='./logout.php'><button class=\"btn btn-secondary\"> Logout </button> </a>";

echo "</header>";


//Displays uncompleted to do list items
echo "<div class='container'>";
echo "<hr>";
echo "<h4>Uncompleted</h4>";
$sql = "SELECT * FROM todos WHERE owneremail='$email' AND isdone='0'";
$results = runQuery($sql);
echo "<ul>";
foreach($results as $row){
	echo "<li class=\"list-group-item list-group-item-danger\">" . $row['message'] ." |  Due Date: ".  $row['duedate'] . 
       "<a href=\"remove_button_action.php?id=".$row['id']."\">Delete</a>". "<a href=\"move_to_completed_action.php?id=".$row['id']."\">Move to Completed</a>".
       "</li>";	
//Form input for editing to-do item
echo "<form action=\"edit_form.php?id=".$row['id']."\" method='POST' target='_self'>";
echo "<input id='editInput' type='text' name='editTask'>";
echo "<input id='editSubmit' type='submit' value='Edit Task'>";
echo "</form>";



}
echo "</ul>";
//End of Displays Uncompleted

//Displays completed to do list items
echo "<h4>Completed</h4>";
$sql = "SELECT * FROM todos WHERE owneremail='$email' AND isdone='1'";
$results = runQuery($sql);
echo "<ul>";
foreach($results as $row){
	echo "<li class=\"list-group-item list-group-item-success\">" . $row['message'] ."|  Due Date: ".  $row['duedate'] .
        "<a href=\"remove_button_action.php?id=".$row['id']."\">Delete</a>". "</li>";			
}
echo "</ul>";
echo "</div>";
//End of Display Completed Items

?>




<!DOCTYPE html>
<html lang="en">
  <head>
  	<link href="./main.css" rel="stylesheet">
  	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  	<script src='./main.js'> </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <?php if (isset($_SESSION['userFirstName']))  { ?>
  	<div class='container'>
    	<h2>Add To-Do List Items</h2>
    		<form id="todo_form" action="./todo_insert.php" method="POST" target="_self">
  				<div class="form-group">
  					<label for="message"> Task </label>   			
    				<input required type="text" name="message" class="form-control" id="message" placeholder="Example input">
    				<label for="dueDate"> Due Date </label>   			
    				<input required type="date" name="dueDate" class="form-control" id="dueDate">
    				<button type="submit" id="addTaskButton" class="btn btn-primary">Add Task</button>       		
  				</div>  		
			</form>	
	</div>
  <?php } ?>
  <footer>
    <span> &copy; 2017 </span>
  </footer>	
  </body>
</html>






