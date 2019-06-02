<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signin</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="blabla.css" rel="stylesheet">
</head>
<body>

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO users (uname, email, pass)
VALUES ('$_POST[name]','$_POST[uemail]','$_POST[upass]')";

if ($conn->query($sql) === TRUE) {
    echo" ";
} else {
    echo "<p style='color:red; text-align:center;'>User name already taken</p>";
}

$conn->close();
?>



        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                   <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">Register</h5>
                  <form class="form-signin" method="POST">
                    <div class="form-label-group">
                      <input type="text" id="inputUserame" class="form-control" name="name" placeholder="Username" required autofocus>
                      <label for="inputUserame">Username</label>
                    </div>
      
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" name="uemail" placeholder="Email address" required>
                      <label for="inputEmail">Email address</label>
                    </div>
                    
                    <hr>
      
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" name ="upass" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>
                    
                    <div class="form-label-group">
                      <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                      <label for="inputConfirmPassword">Confirm password</label>
                    </div>
      
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">REGISTRATION</button>
                    <a class="d-block text-center mt-2 small" href="#">LogIn</a>
                    <hr class="my-4">
                    <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign up with Google</button>
                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign up with Facebook</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
</html>