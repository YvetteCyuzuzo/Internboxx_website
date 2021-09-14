
    <?php
    $conn = mysqli_connect("localhost", "root", "", "internships");

    if($conn === false)
        {
            die("ERROR: Could not connect." 
                . mysqli_connect_error()); 
        } 

$degree = $_POST['degree'];
$interest = $_POST['interest'];
$type = $_POST['type'];
$nature = $_POST['nature'];



// database connection

$sql = "INSERT INTO registration VALUES ('$degree','$interest','$type','$nature')";
           
        if(mysqli_query($conn, $sql))
        { 
  				include 'patience.html'; 
  } 
        else
        { 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); 
        } 
        mysqli_close($conn); 


?>
