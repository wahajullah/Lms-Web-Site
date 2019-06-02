<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT uname,pass FROM `users` WHERE uname='$username' and pass='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header('Location: main.php'); 


}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
header('Location: index.php');
//echo "Invalid Login Credentials";
}
}
?>