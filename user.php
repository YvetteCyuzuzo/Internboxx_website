
    <?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["us-cdbr-east-04.cleardb.com"];
$cleardb_username = $cleardb_url["b412046342f48c"];
$cleardb_password = $cleardb_url["7354aefc"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

//     if($conn === false)
//         {
//             die("ERROR: Could not connect." 
//                 . mysqli_connect_error()); 
//         } 

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
    if($conn === false)
        {
            die("ERROR: Could not connect." 
                . mysqli_connect_error()); 
        } 


?>
