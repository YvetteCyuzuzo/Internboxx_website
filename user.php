//Connecting file for register.php which is the first Sign up form on the website
<?php

require("config/config.php");
require("config/db.php");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];


// database connection

$sql = "INSERT INTO user VALUES ('$username','$email','$password','$confirm')";
$result = mysqli_query($conn, $sql);
header("Location:https://internboxx.herokuapp.com/signup2.php");

?>