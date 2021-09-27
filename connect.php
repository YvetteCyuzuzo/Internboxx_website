
    <?php

    require("config/config.php");
    require("config/db.php");
    $degree = $_POST['degree'];
    $interest = $_POST['interest'];
    $type = $_POST['type'];
    $nature = $_POST['nature'];



    // database connection

    $sql = "INSERT INTO registration VALUES ('$degree','$interest','$type','$nature')";
    $sql = "INSERT INTO user VALUES ('$degree','$interest','$type','$nature')";
    $result = mysqli_query($conn, $sql);
    header("Location:https://internboxx.com/patience.html");

    ?>
