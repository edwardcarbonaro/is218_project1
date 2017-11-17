<?php
session_start();
require "db.php";
//Sets Variables
$email = $_SESSION['email'];
$firstName = $_SESSION['userFirstName'];
$lastName = $_SESSION['userLastName'];

//Displays uncompleted to do list items
echo "<a href='./form.php'> <button class=\"btn btn-secondary\"> Return Home </button></a>";
echo "<hr>";
echo "<h2>To-Do List For:  " . $firstName . " " . $lastName . "</h1>";
$sql = "SELECT * FROM todos WHERE owneremail='$email' AND isdone='0'";
$results = runQuery($sql);
echo "<ul>";
foreach($results as $row){
	echo "<li>" . $row['message'] ." |  Due Date: ".  $row['duedate']  . "</li>";			
}
echo "</ul>";
//End of Displays Uncompleted

//Displays completed to do list items
echo "<h4>These are your completed to-do items</h4>";
$sql = "SELECT * FROM todos WHERE owneremail='$email' AND isdone='1'";
$results = runQuery($sql);
echo "<ul>";
foreach($results as $row){
	echo "<li>" . $row['message'] ."|  Due Date: ".  $row['duedate'] . "</li>";			
}
echo "</ul>";
//End of Display Completed Items
?>






<!DOCTYPE html>
<html lang="en">
  <head>
  	<style>
  	html{
  		margin: 10px 100px 100px 100px;
  	}
  	</style>
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
    <h2>Add To-Do List Items</h2>
    <form action="./todo_insert.php" method="POST" target="_self">
  		<div class="form-group">
  			<label for="message"> Task </label>   			
    		<input type="text" name="message" class="form-control" id="message" placeholder="Example input">
    		<label for="dueDate"> Due Date </label>   			
    		<input type="date" name="dueDate" class="form-control" id="dueDate">

    		<button type="submit" id="addTaskButton" class="btn btn-primary">Add Task</button>       		
  		</div>  		
	</form>		
  </body>
</html>





