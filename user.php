
    <?php
//     //Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

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

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    if($conn === false)
        {
            die("ERROR: Could not connect." 
                . mysqli_connect_error()); 
        } 


?>
