<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#A2B38B;">
      
   
       
 <div class="jumbotron" style="border-radius:0;background:url('images/8.jpg');height:400px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" style="background-color:orange;  class="list-group-item active"
                   >Members</a>
                <a href="trainer_details.php" style="color:grey;" class="list-group-item">Member details</a>
                <a href="package.php" style="color:grey;" class="list-group-item">Package details</a>
                
            </div>
            <hr>
            <div class="list-group">
<a href="" style="background-color:orange" class="list-group-item active">Trainer</a>
<a href="trainer.php" style="color:grey" class="list-group-item ">Trainer details</a>            
<a href="addtrainer.php" style="color:grey" class="list-group-item">Add new Trainer</a>
 </div> 
 <hr>
 <div class="list-group">
 <a href="content.php" style="background-color:orange" class="list-group-item active">Facilities</a>
            </div>
</div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:orange;color:FFFFFF;">
                <h3>Register new members</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group"style="background-color:#A2B38B" action="func.php" method="post">
                <label>first name:</label>
<input type="text" name="fname" class="form-control"><br>
                    <label>last name:</label>
<input type="text" name="lname" class="form-control"><br> 
 <label>email</label>
                    <input type="text" name="email" class="form-control"><br>
                    <label>Member ID</label>
<input type="text" name="contact" class="form-control"><br>        
 <label>Trainer </label> 
 <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
                                        
  <input type="submit" style="background-color:orange" class="btn btn-primary" name="pat_submit" value="Register">                  <a href="func.php" class="btn btn-light"></a>
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   