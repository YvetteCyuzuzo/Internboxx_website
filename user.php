
    <?php
    $conn = mysqli_connect("localhost", "root", "", "internships");

    if($conn === false)
        {
            die("ERROR: Could not connect." 
                . mysqli_connect_error()); 
        } 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];


// database connection

$sql = "INSERT INTO user VALUES ('$username','$email','$password','$confirm')";
           
        if(mysqli_query($conn, $sql))
        { 
  				include 'singup2.php'; 
  } 
        else
        { 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); 
        } 
        mysqli_close($conn); 


?>
