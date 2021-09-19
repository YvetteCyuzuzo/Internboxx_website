
    <?php

    require("config/config.php");
    require("config/db.php");

    // $conn = mysqli_connect("localhost", "root", "", "internships");

    // if ($conn === false) {
    //     die("ERROR: Could not connect."
    //         . mysqli_connect_error());
    // }

    $degree = $_POST['degree'];
    $interest = $_POST['interest'];
    $type = $_POST['type'];
    $nature = $_POST['nature'];



    // database connection

    $sql = "INSERT INTO registration VALUES ('$degree','$interest','$type','$nature')";
    $sql = "INSERT INTO user VALUES ('$degree','$interest','$type','$nature')";
    $result = mysqli_query($conn, $sql);
    header("Location:https://internboxx.herokuapp.com/patience.html");

    // if (mysqli_query($conn, $sql)) {
    //     include 'patience.html';
    // } else {
    //     echo "ERROR: Hush! Sorry $sql. "
    //         . mysqli_error($conn);
    // }
    // mysqli_close($conn);


    ?>
