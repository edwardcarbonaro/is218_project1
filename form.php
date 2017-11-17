<?php
// Start the session
session_start();
if(isset($_SESSION['userFirstName'])){
  echo " You are Logged In As " . $_SESSION['userFirstName'] . " " . $_SESSION['userLastName'];
  echo "<br>";
}

if(isset($_SESSION['userFirstName'])){
  echo "<a href='logout.php'>Logout</a>";
  echo "<br>";
  echo "<a href='userToDoList.php'>To Do List</a>";
}

?> 




  
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<!-- <div class="header">
<h1> Header </h1>

</div> -->

<div class="container">
 	<div class="row">
        <div class="span12">
    		<div class="" id="loginModal">
              <div class="modal-header">
               
                <h3>Registration and Login Page</h3>
              </div>
              <div class="modal-body">
                <div class="well">
                 
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="login">
                      <form class="form-horizontal" action="./db_insert.php" method="POST" target="_blank">
                        <fieldset>
                          <div id="legend">
                            <legend class="">Register</legend>
                          </div>    
                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">First Name</label>
                            <div class="controls">
                              <input required type="text" id="firstname" name="firstName" placeholder="First Name" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="lastname">Last Name</label>
                            <div class="controls">
                              <input required  type="text" id="lastname" name="lastName" placeholder="Last Name" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- email -->
                            <label class="control-label"  for="username">Email</label>
                            <div class="controls">
                              <input required  type="email" id="email" name="email" placeholder="Email" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Phone Number</label>
                            <div class="controls">
                              <input required  type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Birthday</label>
                            <div class="controls">
                              <input required  style="width:175px;" type="date" id="birthday" name="birthday" placeholder="" class="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Gender</label>
                            <div class="controls">
                              <input required  type="text" id="gender" name="gender" placeholder="Gender" class="input-xlarge">
                            </div>
                          </div>

                           <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Password</label>
                            <div class="controls">
                              <input required  type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
                            </div>
                          </div>

                         


     
     
                          <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                              <br><button class="btn btn-success">Sign up</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>                
                    </div>

                </div>
              </div>
            </div>
        </div>
	</div><!-- Closes span12 -->
</div><!-- Closes row -->
</div><!-- Closes container -->

<div class="container">
  <div class="well">    
    <fieldset> <legend> Log In </legend>
      <form class="form-horizontal" action="./db_login.php" method="POST" target="_self">

       <div class="control-group">
         <label class="control-label"  for="username">Email</label>
            <div class="controls">
              <input required  type="email" id="email" name="email" placeholder="Email" class="input-xlarge">
           </div>
        </div>

       <div class="control-group">
         <label class="control-label"  for="password">Password</label>
            <div class="controls">
              <input required  type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
           </div>
        </div>      

       <div class="control-group">        
            <div class="controls">
              <br><button class="btn btn-success">Login</button>
           </div>
        </div>

     </form>
   </fieldset>
 </div>
</div>
</body>
</html>
