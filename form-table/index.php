<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Bootsrap task</title>
  </head>
  <body>
 	<nav class="navbar navbar-expand-sm bg-dark navbar-dark"><!-- nav start -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="#about">ABOUT</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#skillSet">SKILLS</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">WORKS</a>
	      </li>    
	    </ul>
	  </div>  
	</nav><!-- navigation end -->
	<div class="container">
	  <form method="post">
	  	<div class="form-group">
	      <label for="firstname">Firstname:</label>
	      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" required >
	    </div>
	    <div class="form-group">
	      <label for="lastname">Lastname:</label>
	      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" required >
	    </div>
	    <div class="form-group">
	      <label for="email">Email:</label>
	      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
	    </div>
	    <div class="form-group">
	      <label for="phone">Phonenumber:</label>
	      <input type="tel" class="form-control" id="phone" placeholder="Enter phonenumber" name="phone" required>
	    </div>
	    <div class="form-group">
	      <label for="pwd">Password:</label>
	      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
	    </div>
	    <input type="submit" class="btn btn-default" name="send">
	  </form>
    <?php

    require_once "config.php";

	  if(isset($_POST['send'])) {

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email = $_POST['email'];
    $phone  = $_POST['phone'];
    $pwd = $_POST['pwd'];

        $sql = "INSERT INTO user (firstname, lastname, email, phone, pwd)
    VALUES ('$firstname', '$lastname', '$email', '$phone', '$pwd')";

    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

}



$query = "SELECT * FROM user ORDER by firstname";
$result = $connect->query($query);

?>
  <table>
       <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>

<?php

   // go through each row that was returned in $result
  while($table = mysqli_fetch_array($result)){

?>
      <tr>
        <td><?php print $table[1] ?></td>
        <td><?php print $table[2] ?></td>
        <td><?php print $table[3] ?></td> 
        <td><?php print $table[4] ?></td>
      </tr>

  <?php 

  } 

?>

  </table>
<!-- table end -->
<?php
     // cloose db here    
     $connect->close();    
?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  </body>
</html>